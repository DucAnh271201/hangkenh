<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\Str;

class MakeAllCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:all {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make an All File';

    /**
     * Filesystem instance
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {

        // controller
        $name = $this->argument('name');
        $namespace = 'App\\Http\\Controllers';
        $path = base_path($namespace) . '\\' . $name . 'Controller.php';
        $this->makeDirectory(dirname($path));
        $contents = $this->getStubContents($this->getStubPath('controller'), $this->getStubVariables($namespace, $name));
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }

        // migration
        \Artisan::call('make:model ' . $name . ' -m');

        // Repository interface
        $name = $this->argument('name');
        $namespace = 'App\\Repositories\\' . $name;
        $path = base_path($namespace) . '\\' . $name . 'RepositoryInterface.php';
        $this->makeDirectory(dirname($path));
        $contents = $this->getStubContents($this->getStubPath('repositoryInterface'), $this->getStubVariables($namespace, $name));
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
        // Repository
        $name = $this->argument('name');
        $namespace = 'App\\Repositories\\' . $name;
        $path = base_path($namespace) . '\\' . $name . 'Repository.php';
        $this->makeDirectory(dirname($path));
        $contents = $this->getStubContents($this->getStubPath('repository'), $this->getStubVariables($namespace, $name));
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }

        // Services
        $name = $this->argument('name');
        $namespace = 'App\\Services\\' . $name;
        $path = base_path($namespace) . '\\' . $name . 'Service.php';
        $this->makeDirectory(dirname($path));
        $contents = $this->getStubContents($this->getStubPath('service'), $this->getStubVariables($namespace, $name));
        if (!$this->files->exists($path)) {
            $this->files->put($path, $contents);
            $this->info("File : {$path} created");
        } else {
            $this->info("File : {$path} already exits");
        }
        die;

    }

    /**
     * Return the stub file path
     * @return string
     *
     */
    public function getStubPath($file)
    {
        return __DIR__ . "/../../../stubs/core/$file.stub";
    }

    /**
     **
     * Map the stub variables present in stub to its value
     *
     * @return array
     *
     */
    public function getStubVariables($namespace, $name)
    {
        return [
            'CLASS_NAMESPACE' => $namespace,
            'CLASS' => $this->getSingularClassName($name),
            'LOWER_NAME' => \Str::snake($name),
            'TABLE' => \Str::snake($name),
            'MODEL' => $name
        ];
    }

    /**
     * Get the stub path and the stub variables
     *
     * @return bool|mixed|string
     *
     */
    public function getSourceFile()
    {
        return $this->getStubContents($this->getStubPath(), $this->getStubVariables());
    }


    /**
     * Replace the stub variables(key) with the desire value
     *
     * @param $stub
     * @param array $stubVariables
     * @return bool|mixed|string
     */
    public function getStubContents($stub, $stubVariables = [])
    {
        $contents = file_get_contents($stub);

        foreach ($stubVariables as $search => $replace) {
            $contents = str_replace('$' . $search . '$', $replace, $contents);
        }

        return $contents;
    }

    /**
     * Get the full path of generate class
     *
     * @return string
     */
    public function getSourceFilePath()
    {
        return base_path('App\\Interfaces') . '\\' . $this->getSingularClassName($this->argument('name')) . 'Interface.php';
    }

    /**
     * Return the Singular Capitalize Name
     * @param $name
     * @return string
     */
    public function getSingularClassName($name)
    {
        return ucwords(Pluralizer::singular($name));
    }

    /**
     * Build the directory for the class if necessary.
     *
     * @param string $path
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        return $path;
    }

}
