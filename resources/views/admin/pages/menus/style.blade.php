<style>
    #hwpwrap {
        color: #424242;
    }

    #hwpwrap a{
        color: #2ea2cc;
    }

    #hwpwrap .outer-border{
        list-style-type: none;
    }
    #hwpwrap #wpwrap {
        height: auto;
        min-height: 100%;
        width: 100%;
        position: relative;
        -webkit-font-smoothing: subpixel-antialiased;

    }
    #hwpwrap #wpcontent {
        height: 100%;
    }
    #hwpwrap .folded #wpcontent, #hwpwrap .folded #wpfooter {
        margin-left: 36px;
    }
    #hwpwrap #wpbody-content {
        padding-bottom: 65px;
        float: left;
        width: 100%;
        overflow: visible !important;
    }
    #hwpwrap .inner-sidebar {
        float: right;
        clear: right;
        display: none;
        width: 281px;
        position: relative;
    }
    #hwpwrap .columns-2 .inner-sidebar {
        margin-right: auto;
        width: 286px;
        display: block;
    }
    #hwpwrap .columns-2 .inner-sidebar #side-sortables, #hwpwrap .inner-sidebar #side-sortables {
        min-height: 300px;
        width: 280px;
        padding: 0;
    }
    #hwpwrap .has-right-sidebar .inner-sidebar {
        display: block;
    }
    #hwpwrap .has-right-sidebar #post-body {
        float: left;
        clear: left;
        width: 100%;
        margin-right: -2000px;
    }
    #hwpwrap .has-right-sidebar #post-body-content {
        margin-right: 300px;
        float: none;
        width: auto;
    }
    #hwpwrap #col-container, #hwpwrap #col-left, #hwpwrap #col-right {
        overflow: hidden;
        padding: 0;
        margin: 0;
    }
    #hwpwrap #col-left {
        width: 35%;
    }
    #hwpwrap #col-right {
        float: right;
        clear: right;
        width: 65%;
    }
    #hwpwrap .col-wrap {
        padding: 0 7px;
    }
    #hwpwrap .alignleft {
        float: left;
    }
    #hwpwrap .alignright {
        float: right;
    }
    #hwpwrap .textleft {
        text-align: left;
    }
    #hwpwrap .textright {
        text-align: right;
    }
    #hwpwrap .clear {
        clear: both;
    }
    #hwpwrap .screen-reader-text, #hwpwrap .screen-reader-text span, #hwpwrap .ui-helper-hidden-accessible {
        position: absolute;
        margin: -1px;
        padding: 0;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(0 0 0 0);
        border: 0;
    }
    #hwpwrap .screen-reader-shortcut {
        position: absolute;
        top: -1000em;
    }
    #hwpwrap .screen-reader-shortcut:focus {
        left: 6px;
        top: -25px;
        height: auto;
        width: auto;
        display: block;
        font-size: 14px;
        font-weight: 600;
        padding: 15px 23px 14px;
        background: #f1f1f1;
        color: #21759b;
        z-index: 100000;
        line-height: normal;
        -webkit-box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
        box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
        text-decoration: none;
        outline: 0;
    }
    #hwpwrap .hidden, #hwpwrap .js .closed .inside, #hwpwrap .js .hide-if-js, #hwpwrap .js .wp-core-ui .hide-if-js, #hwpwrap .js.wp-core-ui .hide-if-js, #hwpwrap .no-js .hide-if-no-js, #hwpwrap .no-js .wp-core-ui .hide-if-no-js, #hwpwrap .no-js.wp-core-ui .hide-if-no-js {
        display: none;
    }
    #hwpwrap #menu-management .menu-edit, #hwpwrap #menu-settings-column .accordion-container, #hwpwrap .feature-filter, #hwpwrap .imgedit-group, #hwpwrap .manage-menus, #hwpwrap .menu-item-handle, #hwpwrap .popular-tags, #hwpwrap .stuffbox, #hwpwrap .widget-inside, #hwpwrap .widget-top, #hwpwrap .widgets-holder-wrap, #hwpwrap .wp-editor-container, #hwpwrap p.popular-tags, #hwpwrap table.widefat {
        border: 1px solid #e5e5e5;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
    }
    #hwpwrap .feature-filter, #hwpwrap .imgedit-group, #hwpwrap .popular-tags, #hwpwrap .stuffbox, #hwpwrap .widgets-holder-wrap, #hwpwrap .wp-editor-container, #hwpwrap p.popular-tags, #hwpwrap table.widefat {
        background: #fff;
    }
    #hwpwrap .ie8 a:focus {
        outline: #5b9dd9 solid 1px;
    }
    #hwpwrap #adminmenu a:focus, #hwpwrap .screen-reader-text:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0;
    }
    #hwpwrap .wp-filter .search-form select {
        margin: 0;
        height: 32px;
        vertical-align: top;
    }
    #hwpwrap .wp-filter .search-form.search-plugins {
        display: inline-block;
    }
    #hwpwrap .wp-filter .drawer-toggle {
        display: inline-block;
        margin: 0 10px;
        padding: 4px 6px;
        color: #666;
        cursor: pointer;
    }
    #hwpwrap .wp-filter .drawer-toggle:before {
        display: inline-block;
        vertical-align: top;
        content: "\f111";
        margin: 0 5px 0 0;
        width: 16px;
        height: 16px;
        color: #777;
        -webkit-transition: color .1s ease-in 0;
        transition: color .1s ease-in 0;
        font-family: dashicons;
        font-size: 16px;
        line-height: 1;
        text-align: center;
        text-decoration: inherit;
        font-weight: 400;
        font-style: normal;
        -webkit-font-smoothing: antialiased;
    }
    #hwpwrap .wp-filter .drawer-toggle:hover, #hwpwrap .wp-filter .drawer-toggle:hover:before {
        color: #2ea2cc;
    }
    #hwpwrap .wp-filter .drawer-toggle.current:before {
        color: #fff;
    }
    #hwpwrap .filter-drawer {
        display: none;
        margin: 0 -20px;
        padding: 20px;
        border-top: 1px solid #eee;
        background: #fafafa;
    }
    #hwpwrap .show-filters .filter-drawer {
        display: block;
        overflow: hidden;
        width: 100%;
    }
    #hwpwrap .show-filters .wp-filter .drawer-toggle:focus, #hwpwrap .show-filters .wp-filter .drawer-toggle:hover {
        background: #2ea2cc;
    }
    #hwpwrap .show-filters .filter-links a.current {
        border-bottom: none;
    }
    #hwpwrap .show-filters .wp-filter .drawer-toggle {
        -webkit-border-radius: 2px;
        border-radius: 2px;
        border: none;
        background: #777;
        color: #fff;
    }
    #hwpwrap .show-filters .wp-filter .drawer-toggle:before {
        color: #fff;
    }
    #hwpwrap .filter-group {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        float: left;
        margin: 0 1% 0 0;
        padding: 10px;
        width: 24%;
        background: #fff;
        border: 1px solid #e5e5e5;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
    }
    #hwpwrap .filter-group h4 {
        position: relative;
        margin: 0;
    }
    #hwpwrap .filter-drawer ol {
        margin: 20px 0 0;
        list-style-type: none;
        font-size: 12px;
    }
    #hwpwrap .filter-drawer li {
        display: inline-block;
        vertical-align: top;
        margin: 5px 0;
        padding-right: 25px;
        width: 160px;
        list-style-type: none;
    }
    #hwpwrap .filter-drawer .buttons {
        margin-bottom: 20px;
    }
    #hwpwrap .filter-drawer .buttons .button span {
        display: inline-block;
        opacity: .8;
        font-size: 12px;
        text-indent: 10px;
    }
    #hwpwrap .wp-filter .button.clear-filters {
        display: none;
        margin: 0 0 20px 10px;
    }
    #hwpwrap .filtered-by {
        display: none;
        margin: 0;
    }
    #hwpwrap .filtered-by > span {
        font-weight: 600;
    }
    #hwpwrap .filtered-by a {
        margin-left: 10px;
    }
    #hwpwrap .filtered-by .tags {
        display: inline;
    }
    #hwpwrap .filtered-by .tag {
        margin: 0 5px;
        padding: 4px 8px;
        border: 1px solid #e5e5e5;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        background: #fff;
        font-size: 11px;
    }
    #hwpwrap .filters-applied .filter-drawer .buttons, #hwpwrap .filters-applied .filter-drawer br, #hwpwrap .filters-applied .filter-group {
        display: none !important;
    }
    #hwpwrap .filters-applied .filtered-by {
        display: block;
    }
    #hwpwrap .filters-applied .filter-drawer {
        padding: 20px;
    }
    #hwpwrap .error .content-filterable, #hwpwrap .loading-content .content-filterable, #hwpwrap .show-filters .content-filterable, #hwpwrap .show-filters.filters-applied.loading-content .content-filterable {
        display: none;
    }
    #hwpwrap .show-filters.filters-applied .content-filterable {
        display: block;
    }
    #hwpwrap .loading-content .spinner {
        display: block;
        margin: 40px auto 0;
        float: none;
    }
    @media only screen and (max-width: 1120px) {
        #hwpwrap .filter-drawer {
            border-bottom: 1px solid #eee;
        }
        #hwpwrap .filter-group {
            margin-bottom: 0;
            margin-top: 5px;
            width: 100%;
        }
        #hwpwrap .filter-group li {
            margin: 10px 0;
        }
    }
    @media only screen and (max-width: 1000px) {
        #hwpwrap .filter-items {
            float: none;
        }
        #hwpwrap .wp-filter .media-toolbar-primary, #hwpwrap .wp-filter .media-toolbar-secondary, #hwpwrap .wp-filter .search-form {
            float: none;
            position: relative;
            max-width: 100%;
        }
    }
    @media only screen and (max-width: 782px) {
        #hwpwrap .filter-group li {
            padding: 0;
            width: 50%;
        }
    }
    @media only screen and (max-width: 320px) {
        #hwpwrap .filter-count {
            display: none;
        }
        #hwpwrap .wp-filter .drawer-toggle {
            margin: 10px 0;
        }
        #hwpwrap .filter-group li, #hwpwrap .wp-filter .search-form input[type=search] {
            width: 100%;
        }
    }
    #hwpwrap .notice, #hwpwrap div.error, #hwpwrap div.updated {
        background: #fff;
        border-left: 4px solid #fff;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
        margin: 5px 15px 2px;
        padding: 1px 12px;
    }
    #hwpwrap .form-table td .notice p, #hwpwrap .notice p, #hwpwrap div.error p, #hwpwrap div.updated p {
        margin: .5em 0;
        padding: 2px;
    }
    #hwpwrap .notice-success, #hwpwrap div.updated {
        border-color: #7ad03a;
    }
    #hwpwrap .notice-warning {
        border-color: #ffba00;
    }
    #hwpwrap .notice-error, #hwpwrap div.error {
        border-color: #dd3d36;
    }
    #hwpwrap .notice-info {
        border-color: #2ea2cc;
    }
    #hwpwrap .media-upload-form .notice, #hwpwrap .media-upload-form div.error, #hwpwrap .wrap .notice, #hwpwrap .wrap div.error, #hwpwrap .wrap div.updated {
        margin: 5px 0 15px;
    }
    #hwpwrap #update-nag, #hwpwrap .update-nag {
        display: inline-block;
        line-height: 19px;
        padding: 11px 15px;
        font-size: 14px;
        text-align: left;
        margin: 25px 20px 0 2px;
        background-color: #fff;
        border-left: 4px solid #ffba00;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
    }
    #hwpwrap .update-message {
        color: #000;
    }
    #hwpwrap .update-php .spinner {
        float: none;
        margin: -4px 0;
    }
    #hwpwrap #ajax-loading, #hwpwrap .ajax-feedback, #hwpwrap .ajax-loading, #hwpwrap .imgedit-wait-spin, #hwpwrap .list-ajax-loading {
        visibility: hidden;
    }
    #hwpwrap #ajax-response.alignleft {
        margin-left: 2em;
    }
    #hwpwrap #adminmenu a, #hwpwrap #catlist a, #hwpwrap #sidemenu a, #hwpwrap #taglist a {
        text-decoration: none;
    }
    #hwpwrap #contextual-help-wrap, #hwpwrap #screen-options-wrap {
        margin: 0;
        padding: 8px 20px 12px;
        position: relative;
    }
    #hwpwrap #contextual-help-link-wrap, #hwpwrap #screen-options-link-wrap {
        float: right;
        height: 28px;
        margin: 0 0 0 6px;
        border: 1px solid #ddd;
        border-top: none;
        background: #fff;
        -webkit-box-shadow: 0 1px 1px -1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px -1px rgba(0, 0, 0, 0.1);
    }
    #hwpwrap #screen-meta-links .screen-meta-toggle {
        position: relative;
        top: 0;
    }
    #hwpwrap #screen-meta-links a {
        color: #777;
    }
    #hwpwrap #screen-meta-links a:active, #hwpwrap #screen-meta-links a:focus, #hwpwrap #screen-meta-links a:hover {
        color: #333;
    }
    #hwpwrap #screen-meta-links a.show-settings {
        display: block;
        font-size: 13px;
        height: 22px;
        line-height: 22px;
        text-decoration: none;
        z-index: 1;
    }
    #hwpwrap #screen-meta-links a:after {
        right: 0;
        content: '\f140';
        font: 400 20px/1 dashicons;
        speak: none;
        display: inline-block;
        padding: 0 5px 0 0;
        bottom: 2px;
        position: relative;
        vertical-align: bottom;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-decoration: none !important;
        color: #bbb;
    }
    #hwpwrap #screen-meta-links a.screen-meta-active:after {
        content: '\f0de';
    }
    #hwpwrap #screen-meta-links a.show-settings:hover {
        text-decoration: none;
    }
    #hwpwrap .toggle-arrow {
        background-repeat: no-repeat;
        background-position: top left;
        background-color: transparent;
        height: 22px;
        line-height: 22px;
        display: block;
    }
    #hwpwrap .toggle-arrow-active {
        background-position: bottom left;
    }
    #hwpwrap #contextual-help-wrap h5, #hwpwrap #screen-options-wrap h5 {
        margin: 8px 0;
        font-size: 13px;
    }
    #hwpwrap .metabox-prefs label {
        display: inline-block;
        padding-right: 15px;
        line-height: 30px;
    }
    #hwpwrap .metabox-prefs label input[type=checkbox] {
        margin-top: -4px;
        margin-right: 6px;
    }
    #hwpwrap .metabox-prefs label input {
        margin: 0 5px 0 2px;
    }
    #hwpwrap .metabox-prefs .columns-prefs label input {
        margin: 0 2px;
    }
    #hwpwrap .metabox-prefs label a {
        display: none;
    }
    #hwpwrap #contextual-help-wrap {
        padding: 0;
    }
    #hwpwrap #contextual-help-columns {
        position: relative;
    }
    #hwpwrap #contextual-help-back {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 150px;
        right: 170px;
        border: 1px solid #e1e1e1;
        border-top: none;
        border-bottom: none;
        background: #f6fbfd;
    }
    #hwpwrap #contextual-help-wrap.no-sidebar #contextual-help-back {
        right: 0;
        border-right-width: 0;
        -webkit-border-bottom-right-radius: 2px;
        border-bottom-right-radius: 2px;
    }
    #hwpwrap .contextual-help-tabs {
        float: left;
        width: 150px;
        margin: 0;
    }
    #hwpwrap .contextual-help-tabs ul {
        margin: 1em 0;
    }
    #hwpwrap .contextual-help-tabs li {
        margin-bottom: 0;
        list-style-type: none;
        border-style: solid;
        border-width: 0 0 0 2px;
        border-color: transparent;
    }
    #hwpwrap .contextual-help-tabs a {
        display: block;
        padding: 5px 5px 5px 12px;
        line-height: 18px;
        text-decoration: none;
        border: 1px solid transparent;
        border-right: none;
        border-left: none;
    }
    #hwpwrap .contextual-help-tabs a:hover {
        color: #333;
    }
    #hwpwrap .contextual-help-tabs .active {
        padding: 0;
        margin: 0 -1px 0 0;
        border-left: 2px solid #2ea2cc;
        background: #f6fbfd;
        -webkit-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.02), 0 1px 0 rgba(0, 0, 0, 0.02);
        box-shadow: 0 2px 0 rgba(0, 0, 0, 0.02), 0 1px 0 rgba(0, 0, 0, 0.02);
    }
    #hwpwrap .contextual-help-tabs .active a {
        border-color: #e1e1e1;
        color: #333;
    }
    #hwpwrap .contextual-help-tabs-wrap {
        padding: 0 20px;
        overflow: auto;
    }
    #hwpwrap .help-tab-content {
        display: none;
        margin: 0 22px 12px 0;
        line-height: 1.6em;
    }
    #hwpwrap .help-tab-content.active {
        display: block;
    }
    #hwpwrap .help-tab-content ul li {
        list-style-type: disc;
        margin-left: 18px;
    }
    #hwpwrap .contextual-help-sidebar {
        width: 150px;
        float: right;
        padding: 0 8px 0 12px;
        overflow: auto;
    }
    #hwpwrap html.wp-toolbar {
        padding-top: 32px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap .narrow {
        width: 70%;
        margin-bottom: 40px;
    }
    #hwpwrap .narrow p {
        line-height: 150%;
    }
    #hwpwrap .widefat td, #hwpwrap .widefat th {
        overflow: hidden;
        color: #555;
    }
    #hwpwrap .widefat th {
        font-weight: 400;
    }
    #hwpwrap .widefat tfoot tr th, #hwpwrap .widefat thead tr th {
        color: #333;
    }
    #hwpwrap .widefat td p {
        margin: 2px 0 .8em;
    }
    #hwpwrap .widefat ol, #hwpwrap .widefat p, #hwpwrap .widefat ul {
        color: #333;
    }
    #hwpwrap .widefat .column-comment p {
        margin: .6em 0;
    }
    #hwpwrap .postbox-container {
        float: left;
    }
    #hwpwrap .postbox-container .meta-box-sortables {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap #wpbody-content .metabox-holder {
        padding-top: 10px;
    }
    #hwpwrap .metabox-holder .postbox-container .empty-container {
        border: 3px dashed #bbb;
        height: 250px;
    }
    #hwpwrap .columns-2 #postbox-container-3 .empty-container, #hwpwrap .columns-2 #postbox-container-4 .empty-container, #hwpwrap .columns-3 #postbox-container-4 .empty-container, #hwpwrap .metabox-holder.columns-1 .postbox-container .empty-container {
        border: 0;
        height: 0;
        min-height: 0;
    }
    #hwpwrap #post-body-content {
        width: 100%;
        min-width: 463px;
        float: left;
    }
    #hwpwrap #post-body.columns-2 #postbox-container-1 {
        float: right;
        margin-right: -300px;
        width: 280px;
    }
    #hwpwrap #post-body.columns-2 #side-sortables {
        min-height: 250px;
    }
    @media only screen and (max-width: 799px) {
        #hwpwrap #wpbody-content .metabox-holder .postbox-container .empty-container {
            border: 0;
            height: 0;
            min-height: 0;
        }
    }
    #hwpwrap .js .postbox .hndle, #hwpwrap .js .widget .widget-top {
        cursor: move;
    }
    #hwpwrap .hndle a {
        font-size: 11px;
        font-weight: 400;
    }
    #hwpwrap .postbox .handlediv {
        float: right;
        width: 27px;
        height: 30px;
    }
    #hwpwrap .js .postbox .handlediv {
        cursor: pointer;
    }
    #hwpwrap .sortable-placeholder {
        border: 1px dashed #bbb;
        margin-bottom: 20px;
    }
    #hwpwrap .postbox, #hwpwrap .stuffbox {
        margin-bottom: 20px;
        padding: 0;
        line-height: 1;
    }
    #hwpwrap .postbox .hndle, #hwpwrap .stuffbox .hndle {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    #hwpwrap .postbox .inside, #hwpwrap .stuffbox .inside {
        padding: 0 12px 12px;
        line-height: 1.4em;
        font-size: 13px;
    }
    #hwpwrap .postbox .inside {
        margin: 11px 0;
        position: relative;
    }
    #hwpwrap .postbox .inside > p:last-child, #hwpwrap .rss-widget ul li:last-child {
        margin-bottom: 1px !important;
    }
    #hwpwrap .postbox.closed h3 {
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    #hwpwrap .postbox table.form-table {
        margin-bottom: 0;
    }
    #hwpwrap .postbox table.widefat {
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    #hwpwrap .temp-border {
        border: 1px dotted #ccc;
    }
    #hwpwrap .columns-prefs label {
        padding: 0 5px;
    }
    #hwpwrap #adminmenu .wp-submenu li.current, #hwpwrap #adminmenu .wp-submenu li.current a, #hwpwrap #adminmenu .wp-submenu li.current a:hover, #hwpwrap #dashboard_right_now .versions .b, #hwpwrap #ed_reply_toolbar #ed_reply_strong, #hwpwrap #pass-strength-result.short, #hwpwrap #pass-strength-result.strong, #hwpwrap #post-status-display, #hwpwrap #post-visibility-display, #hwpwrap .feature-filter .feature-name, #hwpwrap .item-controls .item-order a, #hwpwrap .media-item .percent, #hwpwrap .plugins .name {
        font-weight: 600;
    }
    #hwpwrap #wpfooter {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px 20px;
        color: #777;
    }
    #hwpwrap #wpfooter p {
        font-size: 13px;
        margin: 0;
        line-height: 20px;
    }
    #hwpwrap #footer-thankyou {
        font-style: italic;
    }
    #hwpwrap #wpfooter a {
        text-decoration: none;
    }
    #hwpwrap #wpfooter a:hover {
        text-decoration: underline;
    }
    #hwpwrap .nav-tab {
        border: 1px solid #ccc;
        border-bottom: none;
        background: #e4e4e4;
        color: #555;
        font-size: 12px;
        line-height: 16px;
        display: inline-block;
        padding: 4px 14px 6px;
        text-decoration: none;
        margin: -4px 4px -1px 0;
    }
    #hwpwrap .nav-tab:hover {
        background-color: #fff;
        color: #464646;
    }
    #hwpwrap .nav-tab-active, #hwpwrap .nav-tab-active:hover {
        border-bottom: 1px solid #f1f1f1;
        background: #f1f1f1;
        color: #000;
    }
    #hwpwrap h2.nav-tab-wrapper, #hwpwrap h3.nav-tab-wrapper {
        border-bottom: 1px solid #ccc;
        padding-bottom: 0;
        padding-left: 10px;
    }
    #hwpwrap h2 .nav-tab {
        padding: 6px 10px;
        font-weight: 700;
        font-size: 15px;
        line-height: 24px;
    }
    #hwpwrap .spinner {
        background: url(images/spinner.gif) 0 0/20px 20px no-repeat;
        -webkit-background-size: 20px 20px;
        display: none;
        float: right;
        opacity: .7;
        filter: alpha(opacity=70);
        width: 20px;
        height: 20px;
        margin: 2px 5px 0;
    }
    #hwpwrap #template div {
        margin-right: 190px;
    }
    #hwpwrap .metabox-holder h3 {
        font-size: 14px;
        padding: 8px 12px;
        margin: 0;
        line-height: 1.4;
    }
    #hwpwrap #templateside ul li a {
        text-decoration: none;
    }
    #hwpwrap #sidemenu {
        margin: -30px 15px 0 315px;
        list-style: none;
        position: relative;
        float: right;
        padding-left: 10px;
        font-size: 12px;
    }
    #hwpwrap #sidemenu a {
        padding: 0 7px;
        display: block;
        float: left;
        line-height: 28px;
        border-top: 1px solid #f9f9f9;
        border-bottom: 1px solid #dfdfdf;
        background-color: #f9f9f9;
        -webkit-transition: none;
        transition: none;
    }
    #hwpwrap #sidemenu li {
        display: inline;
        line-height: 200%;
        list-style: none;
        text-align: center;
        white-space: nowrap;
        margin: 0;
        padding: 0;
    }
    #hwpwrap #sidemenu a.current {
        font-weight: 400;
        padding-left: 6px;
        padding-right: 6px;
        -webkit-border-top-left-radius: 3px;
        border-top-left-radius: 3px;
        -webkit-border-top-right-radius: 3px;
        border-top-right-radius: 3px;
        border: 1px solid #dfdfdf;
        border-bottom-color: #f1f1f1;
        background-color: #f1f1f1;
        color: #000;
    }
    #hwpwrap table .column-rating, #hwpwrap table .column-visible, #hwpwrap table .vers {
        text-align: left;
    }
    #hwpwrap .error-message {
        color: red;
        font-weight: 600;
    }
    #hwpwrap body.iframe {
        height: 98%;
    }
    #hwpwrap .lp-show-latest p {
        display: none;
    }
    #hwpwrap .lp-show-latest .lp-error p, #hwpwrap .lp-show-latest p:last-child {
        display: block;
    }
    #hwpwrap td.media-icon {
        text-align: center;
        width: 80px;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    #hwpwrap td.media-icon img {
        max-width: 80px;
        max-height: 60px;
        width: auto;
        height: auto;
    }
    #hwpwrap #submitdiv h3 {
        margin-bottom: 0 !important;
    }
    #hwpwrap .zerosize {
        height: 0;
        width: 0;
        margin: 0;
        border: 0;
        padding: 0;
        overflow: hidden;
        position: absolute;
    }
    #hwpwrap br.clear {
        height: 2px;
        line-height: 2px;
    }
    #hwpwrap .checkbox {
        border: none;
        margin: 0;
        padding: 0;
    }
    #hwpwrap fieldset {
        border: 0;
        padding: 0;
        margin: 0;
    }
    #hwpwrap .post-categories {
        display: inline;
        margin: 0;
        padding: 0;
    }
    #hwpwrap .post-categories li {
        display: inline;
    }
    #hwpwrap div.star-holder {
        position: relative;
        height: 17px;
        width: 100px;
        background: url(images/stars.png?ver=20121108) bottom left repeat-x;
    }
    #hwpwrap div.star-holder .star-rating {
        background: url(images/stars.png?ver=20121108) top left repeat-x;
        height: 17px;
        float: left;
    }
    #hwpwrap #wphead {
        border-bottom: 1px solid #dfdfdf;
    }
    #hwpwrap #wphead h1 a {
        color: #464646;
    }
    #hwpwrap .js .meta-box-sortables .postbox:hover .handlediv {
        margin-right: 0 !important;
    }
    #hwpwrap .js .meta-box-sortables .postbox .handlediv:before, #hwpwrap .js .sidebar-name .sidebar-name-arrow:before {
        right: 12px;
        font: 400 20px/1 dashicons;
        speak: none;
        display: inline-block;
        padding: 8px 10px;
        top: 0;
        position: relative;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-decoration: none !important;
    }
    #hwpwrap .js #widgets-left .sidebar-name .sidebar-name-arrow {
        display: none;
    }
    #hwpwrap .js #widgets-left .sidebar-name:hover .sidebar-name-arrow, #hwpwrap .js #widgets-left .widgets-holder-wrap.closed .sidebar-name .sidebar-name-arrow {
        display: block;
    }
    #hwpwrap .js .meta-box-sortables .postbox .handlediv:before, #hwpwrap .js .sidebar-name .sidebar-name-arrow:before {
        content: '\f0de';
    }
    #hwpwrap .js .meta-box-sortables .postbox.closed .handlediv:before, #hwpwrap .js .widgets-holder-wrap.closed .sidebar-name-arrow:before {
        content: '\f140';
    }
    #hwpwrap .error a {
        text-decoration: underline;
    }
    #hwpwrap .updated a {
        text-decoration: none;
        padding-bottom: 2px;
    }
    #hwpwrap #photo-add-url-div input[type=text] {
        width: 300px;
    }
    #hwpwrap .alignleft h3 {
        margin: 0;
    }
    #hwpwrap #template textarea {
        font-family: Consolas, Monaco, monospace;
        font-size: 13px;
        width: 97%;
        background: #f9f9f9;
        outline: 0;
    }
    #hwpwrap #docs-list, #hwpwrap #template textarea {
        direction: ltr;
    }
    #hwpwrap #template p {
        width: 97%;
    }
    #hwpwrap #templateside {
        float: right;
        width: 190px;
        word-wrap: break-word;
    }
    #hwpwrap #postcustomstuff p.submit, #hwpwrap #templateside h3 {
        margin: 0;
    }
    #hwpwrap #templateside h4 {
        margin: 1em 0 0;
    }
    #hwpwrap #templateside ol, #hwpwrap #templateside ul {
        margin: .5em 0;
        padding: 0;
    }
    #hwpwrap #templateside li {
        margin: 4px 0;
    }
    #hwpwrap #templateside li a, #hwpwrap .theme-editor-php .highlight {
        display: block;
        padding: 3px 3px 3px 12px;
        text-decoration: none;
    }
    #hwpwrap .theme-editor-php .highlight {
        margin: -3px 3px -3px -12px;
    }
    #hwpwrap #templateside .highlight {
        border: none;
        font-weight: 700;
    }
    #hwpwrap .nonessential {
        color: #666;
        font-size: 11px;
        font-style: italic;
        padding-left: 12px;
    }
    #hwpwrap #documentation {
        margin-top: 10px;
    }
    #hwpwrap #documentation label {
        line-height: 22px;
        vertical-align: baseline;
        font-weight: 600;
    }
    #hwpwrap .fileedit-sub {
        padding: 10px 0 8px;
        line-height: 180%;
    }
    #hwpwrap .accordion-section-title:after, #hwpwrap .control-section .accordion-section-title:after, #hwpwrap .nav-menus-php .item-edit:before, #hwpwrap .widget-top a.widget-action:after {
        right: 0;
        content: "\f0dd";
        border: none;
        background: 0 0;
        font: 400 20px/1 FontAwesome;
        speak: none;
        display: block;
        padding: 0;
        text-indent: 0;
        text-align: center;
        position: relative;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-decoration: none !important;
    }
    #hwpwrap .accordion-section-title:after, #hwpwrap .handlediv, #hwpwrap .item-edit, #hwpwrap .sidebar-name-arrow, #hwpwrap .widget-action {
        color: #aaa;
    }
    #hwpwrap .accordion-section-title:hover:after, #hwpwrap .handlediv:hover, #hwpwrap .item-edit:hover, #hwpwrap .sidebar-name:hover .sidebar-name-arrow, #hwpwrap .widget-action:hover {
        color: #777;
    }
    #hwpwrap .widget-top a.widget-action:after {
        padding: 12px 12px 11px;
    }
    #hwpwrap .widget-top a.widget-action:focus:after {
        -webkit-box-shadow: 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
        box-shadow: 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
    }
    #hwpwrap .nav-menus-php .item-edit:before {
        line-height: 2.1;
    }
    #hwpwrap .accordion-section-title:after, #hwpwrap .control-section .accordion-section-title:after {
        float: right;
        right: 20px;
        top: -2px;
    }
    #hwpwrap #customize-info.open .accordion-section-title:after, #hwpwrap .control-section.open .accordion-section-title:after, #hwpwrap .nav-menus-php .menu-item-edit-active .item-edit:before, #hwpwrap .widget.open .widget-top a.widget-action:after {
        content: '\f0de';
    }
    #hwpwrap .ui-draggable-handle, #hwpwrap .ui-sortable-handle {
        -ms-touch-action: none;
        touch-action: none;
    }
    #hwpwrap .accordion-section {
        border-bottom: 1px solid #dfdfdf;
        margin: 0;
    }
    #hwpwrap .accordion-section.open .accordion-section-content, #hwpwrap .no-js .accordion-section .accordion-section-content {
        display: block;
    }
    #hwpwrap .accordion-section.open:hover {
        border-bottom-color: #dfdfdf;
    }
    #hwpwrap .accordion-section-content {
        display: none;
        padding: 10px 20px 15px;
        overflow: hidden;
        background: #fff;
    }
    #hwpwrap .accordion-section-title {
        margin: 0;
        padding: 12px 15px 15px;
        position: relative;
        border-left: 1px solid #dfdfdf;
        border-right: 1px solid #dfdfdf;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    #hwpwrap .js .accordion-section-title {
        cursor: pointer;
    }
    #hwpwrap .js .accordion-section-title:after {
        position: absolute;
        top: 12px;
        right: 10px;
        z-index: 1;
    }
    #hwpwrap .accordion-section-title:focus {
        outline: 0;
    }
    #hwpwrap .accordion-section-title:focus:after, #hwpwrap .accordion-section-title:hover:after {
        border-color: #aaa transparent;
    }
    #hwpwrap .cannot-expand .accordion-section-title {
        cursor: auto;
    }
    #hwpwrap .cannot-expand .accordion-section-title:after {
        display: none;
    }
    #hwpwrap .control-section .accordion-section-title {
        border-left: none;
        border-right: none;
        padding: 10px 10px 11px 14px;
        line-height: 21px;
        background: #fff;
    }
    #hwpwrap .control-section .accordion-section-title:after {
        top: 11px;
    }
    #hwpwrap .js .control-section .accordion-section-title:focus, #hwpwrap .js .control-section .accordion-section-title:hover, #hwpwrap .js .control-section.open .accordion-section-title, #hwpwrap .js .control-section:hover .accordion-section-title {
        color: #222;
        background: #f5f5f5;
    }
    #hwpwrap .control-section.open .accordion-section-title {
        border-bottom: 1px solid #dfdfdf;
    }
    @media only screen and (min-width: 769px) {
        #hwpwrap #col-left {
            width: 35%;
        }
        #hwpwrap #col-right {
            width: 65%;
        }
    }
    @media only screen and (max-width: 860px) {
        #hwpwrap #col-left {
            width: 35%;
        }
        #hwpwrap #col-right {
            width: 65%;
        }
    }
    @media only screen and (min-width: 980px) {
        #hwpwrap #col-left {
            width: 35%;
        }
        #hwpwrap #col-right {
            width: 65%;
        }
    }
    @media only screen and (max-width: 768px) {
        #hwpwrap #col-left, #hwpwrap #col-right {
            width: 100%;
        }
    }
    @media print, (-o-min-device-pixel-ratio: 5 / 4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi) {
        #hwpwrap div.star-holder, #hwpwrap div.star-holder .star-rating {
            /*background: url(images/stars-2x.png?ver=20121108) bottom left/21px 37px repeat-x;*/
            -webkit-background-size: 21px 37px;
        }
        #hwpwrap .spinner {
            background-image: url(images/spinner-2x.gif);
        }
        #hwpwrap #bulk-titles div a, #hwpwrap #bulk-titles div a:hover, #hwpwrap #screen-meta-links a.show-settings, #hwpwrap .curtime #timestamp, #hwpwrap .meta-box-sortables .postbox:hover .handlediv, #hwpwrap .sidebar-name-arrow, #hwpwrap .sidebar-name:hover .sidebar-name-arrow, #hwpwrap .tagchecklist span a, #hwpwrap .tagchecklist span a:hover, #hwpwrap .widget-top a.widget-action, #hwpwrap .widget-top a.widget-action:hover {
            background: none !important;
        }
    }
    @-ms-viewport {
        #hwpwrap {
            width: device-width;
        }
    }
    @media screen and (max-width: 782px) {
        #hwpwrap html.wp-toolbar {
            padding-top: 46px;
        }
        #hwpwrap body {
            min-width: 240px;
            overflow-x: hidden;
        }
        #hwpwrap body * {
            -webkit-tap-highlight-color: transparent !important;
        }
        #hwpwrap #wpcontent {
            position: relative;
            margin-left: 0;
            padding-left: 10px;
        }
        #hwpwrap #wpbody-content {
            padding-bottom: 100px;
        }
        #hwpwrap .wrap {
            margin-right: 12px;
            margin-left: 0;
        }
        #hwpwrap .col-wrap {
            padding: 0;
        }
        #hwpwrap #collapse-menu, #hwpwrap #screen-meta, #hwpwrap #screen-meta-links, #hwpwrap .post-format-select {
            display: none !important;
        }
        #hwpwrap .wrap .add-new-h2, #hwpwrap .wrap .add-new-h2:active {
            padding: 10px 15px;
            font-size: 14px;
        }
        #hwpwrap .wp-color-result {
            height: auto;
            padding-left: 45px;
        }
        #hwpwrap .wp-color-result:after {
            font-size: 14px;
            height: auto;
            padding: 6px 14px;
        }
        #hwpwrap .media-upload-form div.error, #hwpwrap .wrap div.error, #hwpwrap .wrap div.updated {
            margin: 20px 0 10px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 175%;
        }
        #hwpwrap .wrap .icon32 + h2 {
            margin-top: -2px;
        }
        #hwpwrap .wp-responsive-open #wpbody {
            right: -190px;
        }
        #hwpwrap code {
            word-wrap: break-word;
        }
        #hwpwrap .postbox {
            font-size: 14px;
        }
        #hwpwrap .metabox-holder h3 {
            padding: 12px;
        }
        #hwpwrap .postbox .handlediv {
            margin-top: 3px;
        }
        #hwpwrap .subsubsub {
            font-size: 16px;
            text-align: center;
            margin-bottom: 15px;
        }
        #hwpwrap #templateside {
            float: none;
            width: auto;
        }
        #hwpwrap #templateside li {
            margin: 0;
        }
        #hwpwrap #templateside li a {
            display: block;
            padding: 5px;
        }
        #hwpwrap #templateside .highlight {
            padding: 5px;
            margin-left: -5px;
            margin-top: -5px;
        }
        #hwpwrap #template div {
            float: none;
            margin: 0;
            width: auto;
        }
        #hwpwrap #template textarea {
            width: 100%;
        }
        #hwpwrap .fileedit-sub .alignright {
            margin-top: 15px;
        }
        #hwpwrap #comments-form .checkforspam, #hwpwrap #wpfooter {
            display: none;
        }
    }
    @media screen and (max-width: 600px) {
        #hwpwrap #wpwrap.wp-responsive-open {
            overflow-x: hidden;
        }
        #hwpwrap html.wp-toolbar {
            padding-top: 0;
        }
        #hwpwrap #wpbody {
            padding-top: 46px;
        }
        #hwpwrap div#post-body.metabox-holder.columns-1 {
            overflow-x: hidden;
        }
    }
    #hwpwrap input, #hwpwrap textarea {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap input[type=checkbox], #hwpwrap input[type=color], #hwpwrap input[type=date], #hwpwrap input[type=datetime-local], #hwpwrap input[type=datetime], #hwpwrap input[type=email], #hwpwrap input[type=month], #hwpwrap input[type=number], #hwpwrap input[type=password], #hwpwrap input[type=radio], #hwpwrap input[type=search], #hwpwrap input[type=tel], #hwpwrap input[type=text], #hwpwrap input[type=time], #hwpwrap input[type=url], #hwpwrap input[type=week], #hwpwrap select, #hwpwrap textarea {
        border: 1px solid #ddd;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
        background-color: #fff;
        color: #333;
        outline: 0;
        -webkit-transition: .05s border-color ease-in-out;
        transition: .05s border-color ease-in-out;
    }
    #hwpwrap input[type=checkbox]:focus, #hwpwrap input[type=color]:focus, #hwpwrap input[type=date]:focus, #hwpwrap input[type=datetime-local]:focus, #hwpwrap input[type=datetime]:focus, #hwpwrap input[type=email]:focus, #hwpwrap input[type=month]:focus, #hwpwrap input[type=number]:focus, #hwpwrap input[type=password]:focus, #hwpwrap input[type=radio]:focus, #hwpwrap input[type=search]:focus, #hwpwrap input[type=tel]:focus, #hwpwrap input[type=text]:focus, #hwpwrap input[type=time]:focus, #hwpwrap input[type=url]:focus, #hwpwrap input[type=week]:focus, #hwpwrap select:focus, #hwpwrap textarea:focus {
        border-color: #5b9dd9;
        -webkit-box-shadow: 0 0 2px rgba(30, 140, 190, 0.8);
        box-shadow: 0 0 2px rgba(30, 140, 190, 0.8);
    }
    #hwpwrap input[type=email], #hwpwrap input[type=url] {
        direction: ltr;
    }
    #hwpwrap input[type=checkbox], #hwpwrap input[type=radio] {
        border: 1px solid #bbb;
        background: #fff;
        color: #555;
        clear: none;
        cursor: pointer;
        display: inline-block;
        line-height: 0;
        height: 16px;
        margin: -4px 4px 0 0;
        outline: 0;
        padding: 0 !important;
        text-align: center;
        vertical-align: middle;
        width: 16px;
        min-width: 16px;
        -webkit-appearance: none;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        -webkit-transition: .05s border-color ease-in-out;
        transition: .05s border-color ease-in-out;
    }
    #hwpwrap input[type=radio]:checked + label:before {
        color: #888;
    }
    #hwpwrap .wp-core-ui input[type=reset]:active, #hwpwrap .wp-core-ui input[type=reset]:hover {
        color: #2ea2cc;
    }
    #hwpwrap .wp-admin p input[type=checkbox], #hwpwrap .wp-admin p input[type=radio], #hwpwrap td > input[type=checkbox] {
        margin-top: 0;
    }
    #hwpwrap .wp-admin p label input[type=checkbox] {
        margin-top: -4px;
    }
    #hwpwrap .wp-admin p label input[type=radio] {
        margin-top: -2px;
    }
    #hwpwrap input[type=radio] {
        -webkit-border-radius: 50%;
        border-radius: 50%;
        margin-right: 4px;
        line-height: 10px;
    }
    #hwpwrap input[type=checkbox]:checked:before, #hwpwrap input[type=radio]:checked:before {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        transform: translate(0, 0);
    }
    #hwpwrap input[type=checkbox]:checked:before {
        content: "\f00c";
        margin: 0;
        color: #1e8cbe;
    }
    #hwpwrap input[type=radio]:checked:before {
        content: '\2022';
        text-indent: -9999px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        font-size: 24px;
        width: 6px;
        height: 6px;
        margin: 4px;
        line-height: 16px;
        background-color: #1e8cbe;
    }
    @-moz-document url-prefix() {
        #hwpwrap .form-table input.tog, #hwpwrap input[type=checkbox], #hwpwrap input[type=radio] {
            margin-bottom: -1px;
        }
    }
    #hwpwrap input[type=search] {
        -webkit-appearance: textfield;
    }
    #hwpwrap input[type=search]::-webkit-search-decoration {
        display: none;
    }
    #hwpwrap .ie8 input[type=password] {
        font-family: sans-serif;
    }
    #hwpwrap button, #hwpwrap input, #hwpwrap select, #hwpwrap textarea {
        font-family: inherit;
        font-size: inherit;
        font-weight: inherit;
    }
    #hwpwrap input, #hwpwrap select, #hwpwrap textarea {
        font-size: 14px;
        -webkit-border-radius: 0;
        border-radius: 0;
    }
    #hwpwrap textarea {
        overflow: auto;
        padding: 2px 6px;
        line-height: 1.4;
    }
    #hwpwrap .wp-admin input[type=file] {
        padding: 3px 0;
    }
    #hwpwrap label {
        cursor: pointer;
        font-weight: initial;
    }
    #hwpwrap input, #hwpwrap select {
        margin: 1px;
        padding: 3px 5px;
    }
    #hwpwrap input.code {
        padding-top: 6px;
        width: 100%;
    }
    #hwpwrap textarea.code {
        line-height: 1.4;
        padding: 4px 6px 1px;
    }
    #hwpwrap input.readonly, #hwpwrap input[readonly], #hwpwrap textarea.readonly, #hwpwrap textarea[readonly] {
        background-color: #eee;
    }
    #hwpwrap .wp-core-ui :-moz-placeholder, #hwpwrap :-moz-placeholder {
        color: #a9a9a9;
    }
    #hwpwrap th.sortable a, #hwpwrap th.sorted a {
        display: block;
        overflow: hidden;
        padding: 7px 7px 8px 10px;
    }
    #hwpwrap th.manage-column a, #hwpwrap th.sortable a:active, #hwpwrap th.sortable a:focus, #hwpwrap th.sortable a:hover {
        color: #333;
    }
    #hwpwrap th.sortable a:focus {
        background: #e1e1e1;
    }
    #hwpwrap .fixed .column-comments.sortable a, #hwpwrap .fixed .column-comments.sorted a {
        padding: 8px 0;
    }
    #hwpwrap th.sortable a span, #hwpwrap th.sorted a span {
        float: left;
        cursor: pointer;
    }
    #hwpwrap th.desc:hover span.sorting-indicator, #hwpwrap th.sorted.asc .sorting-indicator {
        display: block;
        background-position: 0 0;
    }
    #hwpwrap th.asc:hover span.sorting-indicator, #hwpwrap th.sorted.desc .sorting-indicator {
        display: block;
        background-position: -7px 0;
    }
    #hwpwrap .tablenav-pages a {
        font-weight: 600;
        margin-right: 1px;
        padding: 0 2px;
    }
    #hwpwrap .wp-list-table.plugins .plugin-title strong, #hwpwrap .wp-list-table.plugins .theme-title strong {
        font-size: 1.4em;
        line-height: 1.6em;
    }
    #hwpwrap #poststuff {
        padding-top: 10px;
        min-width: 763px;
    }
    #hwpwrap #poststuff #post-body {
        padding: 0;
    }
    #hwpwrap #poststuff .postbox-container {
        width: 100%;
    }
    #hwpwrap #poststuff #post-body.columns-2 {
        margin-right: 300px;
    }
    #hwpwrap #show-comments {
        overflow: hidden;
    }
    #hwpwrap #save-action .spinner, #hwpwrap #show-comments .spinner, #hwpwrap #show-comments a {
        float: left;
    }
    #hwpwrap #lost-connection-notice .spinner {
        display: block;
        float: left;
        margin: 0 5px 0 0;
    }
    #hwpwrap #titlediv {
        position: relative;
    }
    #hwpwrap #titlediv label {
        cursor: text;
    }
    #hwpwrap #titlediv div.inside {
        margin: 0;
    }
    #hwpwrap #poststuff #titlewrap {
        border: 0;
        padding: 0;
    }
    #hwpwrap #titlediv #title {
        padding: 3px 8px;
        font-size: 1.7em;
        line-height: 100%;
        height: 1.7em;
        width: 100%;
        outline: 0;
        margin: 0;
        background-color: #fff;
    }
    #hwpwrap #titlediv #title-prompt-text {
        color: #777;
        position: absolute;
        font-size: 1.7em;
        padding: 11px 10px;
    }
    #hwpwrap #wp-fullscreen-save .fs-saved {
        color: #999;
        float: right;
        margin-top: 4px;
    }
    #hwpwrap #poststuff .inside-submitbox, #hwpwrap #side-sortables .inside-submitbox {
        margin: 0 3px;
        font-size: 11px;
    }
    #hwpwrap input#link_description, #hwpwrap input#link_url {
        width: 98%;
    }
    #hwpwrap #pending {
        background: 0 none;
        border: 0;
        padding: 0;
        font-size: 11px;
        margin-top: -1px;
    }
    #hwpwrap #edit-slug-box {
        line-height: 24px;
        min-height: 25px;
        margin-top: 5px;
        padding: 0 10px;
        color: #666;
    }
    #hwpwrap #edit-slug-box .cancel {
        margin-right: 10px;
        font-size: 11px;
    }
    #hwpwrap #editable-post-name-full {
        display: none;
    }
    #hwpwrap #editable-post-name {
        background-color: #fffbcc;
    }
    #hwpwrap #editable-post-name input {
        font-size: 13px;
        height: 22px;
        margin: 0;
        width: 16em;
    }
    #hwpwrap .postarea h3 label {
        float: left;
    }
    #hwpwrap .submitbox .submit {
        text-align: left;
        padding: 12px 10px 10px;
        font-size: 11px;
        background-color: #464646;
        color: #ccc;
    }
    #hwpwrap .submitbox .submitdelete {
        text-decoration: none;
        padding: 1px 2px;
    }
    #hwpwrap #normal-sortables .submitbox .submitdelete:hover {
        color: #000;
        background-color: red;
        border-bottom-color: red;
    }
    #hwpwrap .submitbox .submit a:hover {
        text-decoration: underline;
    }
    #hwpwrap .submitbox .submit input {
        margin-bottom: 8px;
        margin-right: 4px;
        padding: 6px;
    }
    #hwpwrap .inside-submitbox #post_status {
        margin: 2px 0 2px -2px;
    }
    #hwpwrap #post-status-select {
        margin-top: 3px;
    }
    #hwpwrap #post-body #normal-sortables {
        min-height: 50px;
    }
    #hwpwrap .postbox {
        position: relative;
        min-width: 255px;
        border: 1px solid #e5e5e5;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        background: #fff;
    }
    #hwpwrap #trackback_url {
        width: 99%;
    }
    #hwpwrap #normal-sortables .postbox .submit {
        background: 0 0;
        border: 0;
        float: right;
        padding: 0 12px;
        margin: 0;
    }
    #hwpwrap .category-add input[type=text], #hwpwrap .category-add select {
        width: 100%;
        max-width: 260px;
        vertical-align: baseline;
    }
    #hwpwrap #side-sortables .category-add input[type=text], #hwpwrap #side-sortables .category-add select {
        margin: 0 0 1em;
    }
    #hwpwrap #side-sortables .add-menu-item-tabs li, #hwpwrap .wp-tab-bar li, #hwpwrap ul.category-tabs li {
        display: inline;
        line-height: 1.35em;
    }
    #hwpwrap .no-js .category-tabs li.hide-if-no-js {
        display: none;
    }
    #hwpwrap #side-sortables .add-menu-item-tabs a, #hwpwrap .category-tabs a, #hwpwrap .wp-tab-bar a {
        text-decoration: none;
    }
    #hwpwrap #post-body ul.add-menu-item-tabs li.tabs a, #hwpwrap #post-body ul.category-tabs li.tabs a, #hwpwrap #side-sortables .add-menu-item-tabs .tabs a, #hwpwrap #side-sortables .category-tabs .tabs a, #hwpwrap .wp-tab-bar .wp-tab-active a {
        color: #333;
    }
    #hwpwrap .category-tabs {
        margin: 8px 0 5px;
    }
    #hwpwrap #category-adder h4 {
        margin: 10px 0;
    }
    #hwpwrap #side-sortables .add-menu-item-tabs, #hwpwrap .wp-tab-bar {
        margin-bottom: 3px;
    }
    #hwpwrap #normal-sortables .postbox #replyrow .submit {
        float: none;
        margin: 0;
        padding: 0 7px 5px;
    }
    #hwpwrap #side-sortables .submitbox .submit .preview, #hwpwrap #side-sortables .submitbox .submit a.preview:hover, #hwpwrap #side-sortables .submitbox .submit input {
        border: 0;
    }
    #hwpwrap #side-sortables .inside-submitbox .insidebox, #hwpwrap .stuffbox .insidebox {
        margin: 11px 0;
    }
    #hwpwrap ul.add-menu-item-tabs, #hwpwrap ul.category-tabs, #hwpwrap ul.wp-tab-bar {
        margin-top: 12px;
    }
    #hwpwrap ul.add-menu-item-tabs li, #hwpwrap ul.category-tabs li {
        border: 1px solid transparent;
        position: relative;
    }
    #hwpwrap .wp-tab-active, #hwpwrap ul.add-menu-item-tabs li.tabs, #hwpwrap ul.category-tabs li.tabs {
        border: 1px solid #dfdfdf;
        border-bottom-color: #fdfdfd;
        background-color: #fdfdfd;
    }
    #hwpwrap ul.add-menu-item-tabs li, #hwpwrap ul.category-tabs li, #hwpwrap ul.wp-tab-bar li {
        padding: 3px 5px 5px;
    }
    #hwpwrap #postimagediv .inside img {
        max-width: 100%;
        height: auto;
        width: auto;
    }
    #hwpwrap form#tags-filter {
        position: relative;
    }
    #hwpwrap td.plugin-title strong, #hwpwrap td.post-title strong {
        display: block;
        margin-bottom: .2em;
        font-size: 14px;
    }
    #hwpwrap td.plugin-title p, #hwpwrap td.post-title p {
        margin: 6px 0;
    }
    #hwpwrap .ui-tabs-hide, #hwpwrap .wp-hidden-children .wp-hidden-child {
        display: none;
    }
    #hwpwrap #post-body .tagsdiv #newtag {
        margin-right: 5px;
        width: 16em;
    }
    #hwpwrap #side-sortables input#post_password {
        width: 94%;
    }
    #hwpwrap #side-sortables .tagsdiv #newtag {
        width: 68%;
    }
    #hwpwrap #post-status-info {
        width: 100%;
        border-spacing: 0;
        border: 1px solid #e5e5e5;
        border-top: none;
        background-color: #f7f7f7;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        z-index: 999;
    }
    #hwpwrap .post-format-icon.post-format-standard:before, #hwpwrap .post-state-format.post-format-standard:before, #hwpwrap a.post-state-format.format-standard:before {
        content: '\f109';
    }
    #hwpwrap .post-format-icon.post-format-image:before, #hwpwrap .post-state-format.post-format-image:before, #hwpwrap a.post-state-format.format-image:before {
        content: '\f128';
    }
    #hwpwrap .post-format-icon.post-format-gallery:before, #hwpwrap .post-state-format.post-format-gallery:before, #hwpwrap a.post-state-format.format-gallery:before {
        content: '\f161';
    }
    #hwpwrap .post-format-icon.post-format-audio:before, #hwpwrap .post-state-format.post-format-audio:before, #hwpwrap a.post-state-format.format-audio:before {
        content: '\f127';
    }
    #hwpwrap .post-format-icon.post-format-video:before, #hwpwrap .post-state-format.post-format-video:before, #hwpwrap a.post-state-format.format-video:before {
        content: '\f126';
    }
    #hwpwrap .post-format-icon.post-format-chat:before, #hwpwrap .post-state-format.post-format-chat:before, #hwpwrap a.post-state-format.format-chat:before {
        content: '\f125';
    }
    #hwpwrap .post-format-icon.post-format-status:before, #hwpwrap .post-state-format.post-format-status:before, #hwpwrap a.post-state-format.format-status:before {
        content: '\f130';
    }
    #hwpwrap .post-format-icon.post-format-aside:before, #hwpwrap .post-state-format.post-format-aside:before, #hwpwrap a.post-state-format.format-aside:before {
        content: '\f123';
    }
    #hwpwrap .post-format-icon.post-format-quote:before, #hwpwrap .post-state-format.post-format-quote:before, #hwpwrap a.post-state-format.format-quote:before {
        content: '\f122';
    }
    #hwpwrap .post-format-icon.post-format-link:before, #hwpwrap .post-state-format.post-format-link:before, #hwpwrap a.post-state-format.format-link:before {
        content: '\f103';
    }
    #hwpwrap .category-adder {
        margin-left: 120px;
        padding: 4px 0;
    }
    #hwpwrap .category-adder h4 {
        margin: 0 0 8px;
    }
    #hwpwrap #side-sortables .category-adder {
        margin: 0;
    }
    #hwpwrap .categorydiv div.tabs-panel, #hwpwrap .customlinkdiv div.tabs-panel, #hwpwrap .posttypediv div.tabs-panel, #hwpwrap .taxonomydiv div.tabs-panel, #hwpwrap .wp-tab-panel {
        min-height: 42px;
        max-height: 200px;
        overflow: auto;
        padding: 0 .9em;
        border: 1px solid #dfdfdf;
        background-color: #fdfdfd;
    }
    #hwpwrap div.tabs-panel-active {
        display: block;
    }
    #hwpwrap div.tabs-panel-inactive {
        display: none;
    }
    #hwpwrap #front-page-warning, #hwpwrap #front-static-pages ul, #hwpwrap .categorydiv ul.categorychecklist ul, #hwpwrap .customlinkdiv ul.categorychecklist ul, #hwpwrap .inline-editor ul.cat-checklist ul, #hwpwrap .posttypediv ul.categorychecklist ul, #hwpwrap .taxonomydiv ul.categorychecklist ul, #hwpwrap ul.export-filters {
        margin-left: 18px;
    }
    #hwpwrap ul.categorychecklist li {
        margin: 0;
        padding: 0;
        line-height: 22px;
        word-wrap: break-word;
    }
    #hwpwrap .comment-ays {
        margin-bottom: 0;
        border-bottom-style: solid;
        border-bottom-width: 1px;
    }
    #hwpwrap .comment-ays .alt {
        background-color: transparent;
    }
    #hwpwrap .spam-undo-inside, #hwpwrap .trash-undo-inside {
        margin: 1px 8px 1px 0;
        line-height: 16px;
    }
    #hwpwrap .spam-undo-inside .avatar, #hwpwrap .trash-undo-inside .avatar {
        height: 20px;
        width: 20px;
        margin-right: 8px;
        vertical-align: middle;
    }
    #hwpwrap .stuffbox .editcomment {
        clear: none;
    }
    #hwpwrap #comment-status-radio p {
        margin: 3px 0 5px;
    }
    #hwpwrap #comment-status-radio input {
        margin: 2px 3px 5px 0;
        vertical-align: middle;
    }
    #hwpwrap #comment-status-radio label {
        padding: 5px 0;
    }
    #hwpwrap table.links-table {
        width: 100%;
        border-spacing: 0;
    }
    #hwpwrap .links-table th {
        font-weight: 400;
        text-align: left;
        vertical-align: top;
        min-width: 80px;
        width: 20%;
        word-wrap: break-word;
    }
    #hwpwrap .links-table td, #hwpwrap .links-table th {
        padding: 5px 0;
    }
    #hwpwrap .links-table td label {
        margin-right: 8px;
    }
    #hwpwrap .links-table td input[type=text], #hwpwrap .links-table td textarea {
        width: 100%;
    }
    #hwpwrap .links-table #link_rel {
        max-width: 280px;
    }
    #hwpwrap #qt_content_dfw, #hwpwrap #wp-content-wrap .mce-wp-dfw {
        display: none;
    }
    #hwpwrap #post-visibility-select {
        line-height: 280%;
    }
    #hwpwrap .wp-core-ui .save-post-visibility, #hwpwrap .wp-core-ui .save-timestamp {
        vertical-align: middle;
        margin-right: 15px;
    }
    #hwpwrap div.quicktags-toolbar input {
        padding: 10px 20px;
    }
    #hwpwrap button.wp-switch-editor {
        font-size: 16px;
        line-height: 1em;
        margin: 7px 0 0 7px;
        padding: 8px 12px;
    }
    #hwpwrap #wp-content-media-buttons a {
        font-size: 16px;
        line-height: 37px;
        height: 39px;
        padding: 0 20px 0 15px;
    }
    #hwpwrap .wp-media-buttons span.jetpack-contact-form-icon, #hwpwrap .wp-media-buttons span.wp-media-buttons-icon {
        width: 22px !important;
        margin-top: -3px !important;
        margin-left: -5px !important;
    }
    #hwpwrap .wp-media-buttons #insert-jetpack-contact-form span.jetpack-contact-form-icon:before, #hwpwrap .wp-media-buttons .add_media span.wp-media-buttons-icon:before {
        font-size: 20px !important;
    }
    #hwpwrap #content_wp_fullscreen {
        display: none;
    }
    #hwpwrap .misc-pub-section {
        padding: 20px 10px;
    }
    #hwpwrap .misc-pub-section > a {
        float: right;
        font-size: 16px;
    }
    #hwpwrap #delete-action, #hwpwrap #publishing-action {
        line-height: 47px;
    }
    #hwpwrap .comment-ays {
        border-bottom: none;
    }
    #hwpwrap .links-table #link_rel {
        max-width: none;
    }
    #hwpwrap .links-table td, #hwpwrap .links-table th {
        padding: 10px 0;
    }
    @media only screen and (max-width: 500px) {
        #hwpwrap #wp-content-media-buttons a {
            font-size: 14px;
            padding: 0 10px;
        }
    }
    #hwpwrap .drag-drop #drag-drop-area {
        border: 4px dashed #bbb;
        height: 200px;
    }
    #hwpwrap .drag-drop .drag-drop-inside {
        margin: 70px auto 0;
        width: 250px;
    }
    #hwpwrap .drag-drop-inside p {
        color: #aaa;
        font-size: 14px;
        margin: 5px 0;
        display: none;
    }
    #hwpwrap .drag-drop .drag-drop-inside p {
        text-align: center;
    }
    #hwpwrap .drag-drop-inside p.drag-drop-info {
        font-size: 20px;
    }
    #hwpwrap .drag-drop .drag-drop-inside p, #hwpwrap .drag-drop-inside p.drag-drop-buttons {
        display: block;
    }
    #hwpwrap .drag-drop.drag-over #drag-drop-area {
        border-color: #83b4d8;
    }
    #hwpwrap #plupload-upload-ui {
        position: relative;
    }
    @media screen and (max-width: 782px) {
        #hwpwrap .about-wrap .one-col > div, #hwpwrap .about-wrap .three-col > div, #hwpwrap .about-wrap .two-col > div {
            width: 100%;
            margin: 0 0 40px;
            padding: 0 0 40px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        #hwpwrap .about-wrap .col > div.last-feature, #hwpwrap .about-wrap .feature-list div {
            margin: 0;
            padding: 0;
            border-bottom: none;
        }
        #hwpwrap .about-wrap .headline-feature .feature-section {
            max-width: 100%;
        }
        #hwpwrap .about-wrap .feature-list .feature-section {
            padding: 0 0 40px;
        }
    }
    @media only screen and (max-width: 500px) {
        #hwpwrap .about-wrap {
            margin-right: 20px;
            margin-left: 10px;
        }
        #hwpwrap .about-wrap .about-text, #hwpwrap .about-wrap h1 {
            margin-right: 0;
        }
        #hwpwrap .about-wrap .about-text {
            margin-bottom: .25em;
        }
        #hwpwrap .about-wrap .wp-badge {
            position: relative;
            margin-bottom: 1.5em;
            width: 100%;
        }
        #hwpwrap .about-wrap h2.nav-tab-wrapper {
            padding-left: 0;
            border-bottom: 0;
        }
        #hwpwrap .about-wrap h2 .nav-tab {
            margin-top: 10px;
            margin-right: 10px;
            border-bottom: 1px solid #ccc;
        }
        #hwpwrap .about-wrap .headline-feature .feature-section div, #hwpwrap .about-wrap .three-col div {
            width: 100% !important;
            float: none !important;
        }
        #hwpwrap .about-wrap .dfw p {
            max-width: 90%;
        }
    }
    @media only screen and (max-width: 400px) {
        #hwpwrap .about-wrap .feature-list svg {
            margin-top: 15px;
            height: 65px;
            width: 65px;
        }
        #hwpwrap .about-wrap .feature-list.finer-points h4, #hwpwrap .about-wrap .feature-list.finer-points p {
            margin-left: 80px;
        }
    }
    #hwpwrap .no-js #message {
        display: block;
    }
    #hwpwrap ul.add-menu-item-tabs li {
        padding: 3px 5px 3px 8px;
    }
    #hwpwrap .accordion-section ul.add-menu-item-tabs, #hwpwrap .accordion-section ul.category-tabs, #hwpwrap .accordion-section ul.wp-tab-bar {
        margin: 0;
    }
    #hwpwrap .accordion-section .categorychecklist {
        margin: 13px 0;
    }
    #hwpwrap #nav-menu-meta .accordion-section-content {
        padding: 18px 13px;
    }
    #hwpwrap #nav-menu-meta .button-controls {
        margin-bottom: 0;
    }
    #hwpwrap #nav-menus-frame {
        margin-left: 300px;
        margin-top: 23px;
    }
    #hwpwrap #wpbody-content #menu-settings-column {
        display: inline;
        width: 281px;
        margin-left: -300px;
        clear: both;
        float: left;
        padding-top: 0;
    }
    #hwpwrap #menu-settings-column .inside {
        clear: both;
        margin: 10px 0 0;
    }
    #hwpwrap .metabox-holder-disabled .accordion-section-content, #hwpwrap .metabox-holder-disabled .accordion-section-title, #hwpwrap .metabox-holder-disabled .postbox {
        opacity: .5;
        filter: alpha(opacity=50);
    }
    #hwpwrap .metabox-holder-disabled .button-controls .select-all {
        display: none;
    }
    #hwpwrap #wpbody {
        position: relative;
    }
    #hwpwrap .blank-slate .menu-name {
        height: 2em;
    }
    #hwpwrap .blank-slate .menu-settings {
        border: none;
        margin-top: 0;
        padding-top: 0;
        overflow: hidden;
    }
    #hwpwrap .is-submenu {
        color: #999;
        font-style: italic;
        font-weight: 400;
        margin-left: 4px;
    }
    #hwpwrap .manage-menus {
        margin-top: 23px;
        padding: 10px;
        overflow: hidden;
        background: #fbfbfb;
    }
    #hwpwrap .manage-menus select {
        float: left;
        margin-right: 6px;
    }
    #hwpwrap .manage-menus .selected-menu {
        float: left;
        margin: 5px 6px 0 0;
    }
    #hwpwrap .manage-menus .submit-btn {
        float: left;
        margin-top: 1px;
    }
    #hwpwrap .menu-edit p {
    }
    #hwpwrap .menu-edit #post-body-content h3 {
        margin: 1em 0 10px;
    }
    #hwpwrap .menu-settings {
        border-top: 1px solid #eee;
        margin-top: 2em;
    }
    #hwpwrap .menu-settings dl {
        margin: 0 0 10px;
        overflow: hidden;
        padding-left: 18%;
    }
    #hwpwrap .menu-settings dd {
        float: left;
        margin: 0;
        width: 100%;
    }
    #hwpwrap .menu-settings dt {
        float: left;
        clear: both;
        width: 21.951%;
        padding: 3px 0 0;
        margin-left: -21.951%;
    }
    #hwpwrap .menu-settings label {
        vertical-align: baseline;
    }
    #hwpwrap .menu-edit .checkbox-input {
        margin-top: 4px;
    }
    #hwpwrap .theme-location-set {
        color: #999;
        font-size: 11px;
    }
    #hwpwrap #menu-management-liquid {
        float: left;
        min-width: 100%;
        margin-top: 3px;
    }
    #hwpwrap #menu-management {
        position: relative;
        margin-right: 20px;
        margin-top: -3px;
        width: 100%;
        background: #f5f5f5;
    }
    #hwpwrap #menu-management .menu-edit {
        margin-bottom: 20px;
    }
    #hwpwrap .nav-menus-php #post-body {
        padding: 0 10px 10px;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #dfdfdf;
        background: #fff;
    }
    #hwpwrap #nav-menu-footer, #hwpwrap #nav-menu-header {
        padding: 0 10px;
    }
    #hwpwrap #nav-menu-header {
        border-bottom: 1px solid #dfdfdf;
        margin-bottom: 0;
    }
    #hwpwrap #nav-menu-header .menu-name-label {
        margin-top: 4px;
    }
    #hwpwrap .nav-menus-php #post-body div.error, #hwpwrap .nav-menus-php #post-body div.updated {
        margin: 0;
    }
    #hwpwrap .nav-menus-php #post-body-content {
        position: relative;
        float: none;
    }
    #hwpwrap #menu-management .menu-add-new abbr {
        font-weight: 600;
    }
    #hwpwrap #select-nav-menu-container {
        text-align: right;
        padding: 0 10px 3px;
        margin-bottom: 5px;
    }
    #hwpwrap #select-nav-menu {
        width: 100px;
        display: inline;
    }
    #hwpwrap #menu-name-label {
        margin-top: -2px;
    }
    #hwpwrap .widefat td.menu-location-menus {
        padding-bottom: 5px;
    }
    #hwpwrap .menu-location-menus select {
        float: left;
    }
    #hwpwrap #locations-nav-menu-wrapper {
        padding: 5px 0;
    }
    #hwpwrap .locations-nav-menu-select select {
        float: left;
        width: 160px;
        margin-right: 5px;
    }
    #hwpwrap .locations-row-links {
        float: left;
        margin: 6px 0 0 6px;
    }
    #hwpwrap .locations-add-menu-link, #hwpwrap .locations-edit-menu-link {
        margin: 0 3px;
    }
    #hwpwrap .locations-edit-menu-link {
        padding-right: 3px;
        border-right: 1px solid #ccc;
    }
    #hwpwrap #wpbody .open-label {
        display: block;
        float: left;
    }
    #hwpwrap #wpbody .open-label span {
        padding-right: 10px;
    }
    #hwpwrap .js .input-with-default-title {
        color: #aaa;
        font-style: italic;
    }
    #hwpwrap #menu-management .inside {
        padding: 0 10px;
    }
    #hwpwrap .accordion-container .howto input, #hwpwrap .postbox .howto input {
        width: 180px;
        float: right;
    }
    #hwpwrap .accordion-container .outer-border {
        margin: 0;
        padding: 0px;
    }
    #hwpwrap .customlinkdiv .howto input {
        width: 180px;
    }
    #hwpwrap .customlinkdiv p {
        margin-top: 0;
    }
    #hwpwrap #nav-menu-theme-locations .howto select {
        width: 100%;
    }
    #hwpwrap #nav-menu-theme-locations .button-controls {
        text-align: right;
    }
    #hwpwrap .add-menu-item-view-all {
        height: 400px;
    }
    #hwpwrap #menu-container .submit {
        margin: 0 0 10px;
        padding: 0;
    }
    #hwpwrap .nav-menus-php .add-new-menu-action {
        float: left;
        margin: 6px 0 0 6px;
        line-height: 15px;
    }
    #hwpwrap .nav-menus-php .meta-sep, #hwpwrap .nav-menus-php .submitcancel, #hwpwrap .nav-menus-php .submitdelete {
        display: block;
        float: left;
        margin: 6px 0;
        line-height: 15px;
    }
    #hwpwrap .meta-sep {
        padding: 0 2px;
    }
    #hwpwrap #cancel-save {
        text-decoration: underline;
        font-size: 12px;
        margin-left: 20px;
        margin-top: 5px;
    }
    #hwpwrap .button-primary.right, #hwpwrap .button-secondary.right, #hwpwrap .button.right {
        float: right;
    }
    #hwpwrap .list-controls {
        float: left;
        margin-top: 5px;
    }
    #hwpwrap .add-to-menu {
        float: right;
    }
    #hwpwrap .postbox .spinner {
        display: none;
        vertical-align: middle;
    }
    #hwpwrap .button-controls {
        clear: both;
        margin: 10px 0;
    }
    #hwpwrap .hide-all, #hwpwrap .show-all {
        cursor: pointer;
    }
    #hwpwrap .hide-all {
        display: none;
    }
    #hwpwrap #menu-name {
        width: 270px;
    }
    #hwpwrap #manage-menu .inside {
        padding: 0;
    }
    #hwpwrap #available-links dt {
        display: block;
    }
    #hwpwrap #add-custom-link .howto {
        font-size: 12px;
    }
    #hwpwrap #add-custom-link label span {
        display: block;
        float: left;
        margin-top: 5px;
        padding-right: 5px;
    }
    #hwpwrap .menu-item-textbox {
        width: 180px;
    }
    #hwpwrap .nav-menus-php .howto span {
        margin-top: 6px;
        display: block;
        float: left;
    }
    #hwpwrap .quick-search {
        width: 190px;
    }
    #hwpwrap .nav-menus-php .list-wrap {
        display: none;
        clear: both;
        margin-bottom: 10px;
    }
    #hwpwrap .nav-menus-php .postbox p.submit {
        margin-bottom: 0;
    }
    #hwpwrap .nav-menus-php .list li {
        display: none;
        margin: 0 0 5px;
    }
    #hwpwrap .nav-menus-php .list li .menu-item-title {
        cursor: pointer;
        display: block;
    }
    #hwpwrap .nav-menus-php .list li .menu-item-title input {
        margin-right: 3px;
        margin-top: -3px;
    }
    #hwpwrap .menu-item-title input[type=checkbox] {
        display: inline-block;
        margin-top: -4px;
    }
    #hwpwrap #menu-container .inside {
        padding-bottom: 10px;
    }
    #hwpwrap .menu {
        padding-top: 1em;
    }
    #hwpwrap #menu-to-edit {
        margin: 0;
        padding: .1em 0;
        list-style-type: none;
    }
    #hwpwrap .menu ul {
        width: 100%;
    }
    #hwpwrap .menu li {
        margin-bottom: 0;
        position: relative;
    }
    #hwpwrap .menu-item-bar {
        clear: both;
        line-height: 1.5em;
        position: relative;
        margin: 9px 0 0;
    }
    #hwpwrap .menu-item-bar .menu-item-handle {
        border: 1px solid #dfdfdf;
        position: relative;
        padding: 10px 15px;
        height: auto;
        min-height: 20px;
        width: 382px;
        line-height: 30px;
        overflow: hidden;
        word-wrap: break-word;
    }
    #hwpwrap .menu-item-bar .menu-item-handle:hover {
        border-color: #999;
        background-color: white;
    }
    #hwpwrap #menu-to-edit .menu-item-invalid .menu-item-handle {
        background: #f6c9cc;
        border-color: #f1acb1;
    }
    #hwpwrap .no-js .menu-item-edit-active .item-edit {
        display: none;
    }
    #hwpwrap .js .menu-item-handle {
        cursor: move;
    }
    #hwpwrap .menu li.deleting .menu-item-handle {
        background-image: none;
        background-color: #f66;
    }
    #hwpwrap .menu-item-handle .item-title {
        font-size: 13px;
        font-weight: 600;
        line-height: 20px;
        display: block;
        margin-right: 13em;
    }
    #hwpwrap .menu-item-handle .menu-item-title.no-title {
        color: #999;
    }
    #hwpwrap li.menu-item.ui-sortable-helper dl {
        margin-top: 0;
    }
    #hwpwrap li.menu-item.ui-sortable-helper .menu-item-transport dl {
        margin-top: 13px;
    }
    #hwpwrap .menu .sortable-placeholder {
        height: 35px;
        width: 410px;
        margin-top: 13px;
    }
    #hwpwrap .menu-item-depth-0 {
        margin-left: 0;
    }
    #hwpwrap .menu-item-depth-1 {
        margin-left: 30px;
    }
    #hwpwrap .menu-item-depth-2 {
        margin-left: 60px;
    }
    #hwpwrap .menu-item-depth-3 {
        margin-left: 90px;
    }
    #hwpwrap .menu-item-depth-4 {
        margin-left: 120px;
    }
    #hwpwrap .menu-item-depth-5 {
        margin-left: 150px;
    }
    #hwpwrap .menu-item-depth-6 {
        margin-left: 180px;
    }
    #hwpwrap .menu-item-depth-7 {
        margin-left: 210px;
    }
    #hwpwrap .menu-item-depth-8 {
        margin-left: 240px;
    }
    #hwpwrap .menu-item-depth-9 {
        margin-left: 270px;
    }
    #hwpwrap .menu-item-depth-10 {
        margin-left: 300px;
    }
    #hwpwrap .menu-item-depth-11 {
        margin-left: 330px;
    }
    #hwpwrap .menu-item-depth-0 .menu-item-transport {
        margin-left: 0;
    }
    #hwpwrap .menu-item-depth-1 .menu-item-transport {
        margin-left: -30px;
    }
    #hwpwrap .menu-item-depth-2 .menu-item-transport {
        margin-left: -60px;
    }
    #hwpwrap .menu-item-depth-3 .menu-item-transport {
        margin-left: -90px;
    }
    #hwpwrap .menu-item-depth-4 .menu-item-transport {
        margin-left: -120px;
    }
    #hwpwrap .menu-item-depth-5 .menu-item-transport {
        margin-left: -150px;
    }
    #hwpwrap .menu-item-depth-6 .menu-item-transport {
        margin-left: -180px;
    }
    #hwpwrap .menu-item-depth-7 .menu-item-transport {
        margin-left: -210px;
    }
    #hwpwrap .menu-item-depth-8 .menu-item-transport {
        margin-left: -240px;
    }
    #hwpwrap .menu-item-depth-9 .menu-item-transport {
        margin-left: -270px;
    }
    #hwpwrap .menu-item-depth-10 .menu-item-transport {
        margin-left: -300px;
    }
    #hwpwrap .menu-item-depth-11 .menu-item-transport {
        margin-left: -330px;
    }
    #hwpwrap body.menu-max-depth-0 {
        min-width: 950px !important;
    }
    #hwpwrap body.menu-max-depth-1 {
        min-width: 980px !important;
    }
    #hwpwrap body.menu-max-depth-2 {
        min-width: 1010px !important;
    }
    #hwpwrap body.menu-max-depth-3 {
        min-width: 1040px !important;
    }
    #hwpwrap body.menu-max-depth-4 {
        min-width: 1070px !important;
    }
    #hwpwrap body.menu-max-depth-5 {
        min-width: 1100px !important;
    }
    #hwpwrap body.menu-max-depth-6 {
        min-width: 1130px !important;
    }
    #hwpwrap body.menu-max-depth-7 {
        min-width: 1160px !important;
    }
    #hwpwrap body.menu-max-depth-8 {
        min-width: 1190px !important;
    }
    #hwpwrap body.menu-max-depth-9 {
        min-width: 1220px !important;
    }
    #hwpwrap body.menu-max-depth-10 {
        min-width: 1250px !important;
    }
    #hwpwrap body.menu-max-depth-11 {
        min-width: 1280px !important;
    }
    #hwpwrap .item-type {
        color: #777;
        font-size: 12px;
        padding: 12px 10px;
        line-height: 18px;
        display: block;
    }
    #hwpwrap .item-controls {
        font-size: 12px;
        position: absolute;
        right: 20px;
        top: -1px;
    }
    #hwpwrap .item-controls a {
        text-decoration: none;
    }
    #hwpwrap .item-controls a:hover {
        cursor: pointer;
    }
    #hwpwrap .item-controls .item-order {
        padding-right: 10px;
    }
    #hwpwrap .nav-menus-php .item-edit {
        position: absolute;
        right: -20px;
        top: 0;
        display: block;
        width: 30px;
        height: 40px;
        margin-right: 0 !important;
        text-indent: 100%;
        outline: 0;
        overflow: hidden;
        white-space: nowrap;
    }
    #hwpwrap .menu-instructions-inactive {
        display: none;
    }
    #hwpwrap .menu-item-settings {
        display: block;
        width: 402px;
        padding: 10px 0 10px 10px;
        position: relative;
        z-index: 10;
        border: 1px solid #e5e5e5;
        border-top: none;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
    }
    #hwpwrap .menu-item-settings .field-move a {
        display: none;
        margin: 0 2px;
    }
    #hwpwrap .menu-item-edit-active .menu-item-settings {
        display: block;
    }
    #hwpwrap .menu-item-edit-inactive .menu-item-settings {
        display: none;
    }
    #hwpwrap .add-menu-item-pagelinks {
        margin: .5em auto;
        text-align: center;
    }
    #hwpwrap .link-to-original {
        display: block;
        margin: 0 0 10px;
        padding: 3px 5px 5px;
        border: 1px solid #dfdfdf;
        color: #777;
        font-size: 12px;
        font-style: italic;
    }
    #hwpwrap .link-to-original a {
        padding-left: 4px;
        font-style: normal;
    }
    #hwpwrap .hidden-field {
        display: none;
    }
    #hwpwrap .menu-item-settings .description-thin, #hwpwrap .menu-item-settings .description-wide {
        margin-right: 10px;
        float: left;
    }
    #hwpwrap .description-thin {
        width: 190px;
        height: 40px;
    }
    #hwpwrap .description-wide {
        width: 390px;
    }
    #hwpwrap .menu-item-actions {
        padding-top: 15px;
    }
    #hwpwrap #cancel-save {
        cursor: pointer;
    }
    #hwpwrap .nav-menus-php .major-publishing-actions {
        clear: both;
        padding: 3px 0 6px;
    }
    #hwpwrap .nav-menus-php .major-publishing-actions .publishing-action {
        text-align: right;
        float: right;
        line-height: 23px;
        margin: 4px 0 1px;
    }
    #hwpwrap .nav-menus-php .blank-slate .menu-settings {
        display: none;
    }
    #hwpwrap .nav-menus-php .delete-action {
        float: left;
        margin-top: 2px;
    }
    #hwpwrap .nav-menus-php .submitbox .submitcancel {
        border-bottom: 1px solid #0074a2;
        padding: 1px 2px;
        color: #0074a2;
        text-decoration: none;
    }
    #hwpwrap .nav-menus-php .submitbox .submitcancel:hover {
        background: #0074a2;
        color: #fff;
    }
    #hwpwrap .nav-menus-php .major-publishing-actions .form-invalid {
        padding-left: 4px;
        margin-left: -4px;
    }
    #hwpwrap #menu-item-name-wrap:after, #hwpwrap #menu-item-url-wrap:after, #hwpwrap #menu-name-label:after, #hwpwrap #menu-settings-column .inside:after, #hwpwrap #nav-menus-frame:after, #hwpwrap .nav-menus-php #post-body-content:after, #hwpwrap .nav-menus-php .button-controls:after, #hwpwrap .nav-menus-php .major-publishing-actions:after, #hwpwrap .nav-menus-php .menu-item-settings:after {
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
    }
    #hwpwrap #menu-item-name-wrap, #hwpwrap #menu-item-url-wrap, #hwpwrap #nav-menus-frame, #hwpwrap .button-controls {
        display: block;
    }
    @media screen and (max-width: 782px) {
        #hwpwrap body.nav-menus-php {
            min-width: 0 !important;
        }
        #hwpwrap #nav-menus-frame {
            margin-left: 0;
            float: none;
            width: 100%;
        }
        #hwpwrap #wpbody-content #menu-settings-column {
            display: block;
            width: 100%;
            float: none;
            margin-left: 0;
        }
        #hwpwrap #side-sortables .add-menu-item-tabs {
            margin: 15px 0 14px;
        }
        #hwpwrap ul.add-menu-item-tabs li.tabs {
            padding: 13px 15px 14px;
        }
        #hwpwrap .nav-menus-php .item-controls .item-type {
            margin-top: 2px;
        }
        #hwpwrap .nav-menus-php .customlinkdiv .howto input {
            width: 65%;
        }
        #hwpwrap .nav-menus-php .quick-search {
            width: 85%;
        }
        #hwpwrap #menu-management-liquid {
            margin-top: 25px;
        }
        #hwpwrap .nav-menus-php .menu-name-label.howto span {
            margin-top: 13px;
        }
        #hwpwrap .menu-name-label #menu-name {
            margin-top: 4px;
        }
        #hwpwrap .nav-menus-php .major-publishing-actions .publishing-action {
            margin-top: 6px;
        }
        #hwpwrap .nav-menus-php .delete-action {
            font-size: 14px;
            line-height: 50px;
            margin-top: 12px;
        }

        #hwpwrap .menu-item-settings {
            padding: 10px;
        }
        #hwpwrap .menu-item-settings .description-thin, #hwpwrap .menu-item-settings .description-wide {
            width: 100%;
            height: auto;
        }
        #hwpwrap .menu-item-settings input {
            width: 100%;
        }
        #hwpwrap .menu-settings dl {
            padding-left: 0;
        }
        #hwpwrap .menu-settings dd {
            float: none;
            width: 100%;
            margin-bottom: 15px;
        }
        #hwpwrap .menu-settings dt {
            float: none;
            width: auto;
            margin-left: 0;
            margin-bottom: 15px;
        }
    }
    @media only screen and (max-width: 768px) {
        #hwpwrap #menu-locations-wrap .widefat {
            width: 100%;
        }
    }
    #hwpwrap .widget {
        margin: 0 auto 10px;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap .widget-top {
        font-size: 13px;
        font-weight: 600;
        background: #f7f7f7;
    }
    #hwpwrap .widget-top a.widget-action, #hwpwrap .widget-top a.widget-action:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: 0;
        text-decoration: none;
    }
    #hwpwrap .widget-title h4 {
        margin: 0;
        padding: 15px;
        line-height: 1;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    #hwpwrap .widgets-holder-wrap .widget-inside {
        border-top: none;
        padding: 1px 15px 15px;
        line-height: 16px;
    }
    #hwpwrap #available-widgets .widget-description, #hwpwrap #widgets-right a.widget-control-edit, #hwpwrap .in-widget-title {
        color: #666;
    }
    #hwpwrap .deleting .widget-title, #hwpwrap .deleting .widget-top a.widget-action:after {
        color: #aaa;
    }
    #hwpwrap .widget.ui-draggable-dragging {
        min-width: 100%;
    }
    #hwpwrap .widget.ui-sortable-helper {
        opacity: .8;
    }
    #hwpwrap .widget-placeholder {
        border: 1px dashed #bbb;
        margin: 0 auto 10px;
        height: 45px;
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap #widgets-right .widget-placeholder {
        margin-top: 0;
    }
    #hwpwrap #widgets-right .closed .widget-placeholder {
        height: 0;
        border: 0;
        margin-top: -10px;
    }
    #hwpwrap .sidebar-name {
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap .wp-core-ui .button, #hwpwrap .wp-core-ui .button-primary, #hwpwrap .wp-core-ui .button-secondary {
        display: inline-block;
        text-decoration: none;
        font-size: 13px;
        line-height: 26px;
        height: 28px;
        margin: 0;
        padding: 0 10px 1px;
        cursor: pointer;
        border-width: 1px;
        border-style: solid;
        -webkit-appearance: none;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        white-space: nowrap;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    #hwpwrap .wp-core-ui button::-moz-focus-inner, #hwpwrap .wp-core-ui input[type=button]::-moz-focus-inner, #hwpwrap .wp-core-ui input[type=reset]::-moz-focus-inner, #hwpwrap .wp-core-ui input[type=submit]::-moz-focus-inner {
        border-width: 0;
        border-style: none;
        padding: 0;
    }
    #hwpwrap .wp-core-ui .button-group.button-large .button, #hwpwrap .wp-core-ui .button.button-large {
        height: 30px;
        line-height: 28px;
        padding: 0 12px 2px;
    }
    #hwpwrap .wp-core-ui .button-group.button-small .button, #hwpwrap .wp-core-ui .button.button-small {
        height: 24px;
        line-height: 22px;
        padding: 0 8px 1px;
        font-size: 11px;
    }
    #hwpwrap .wp-core-ui .button-group.button-hero .button, #hwpwrap .wp-core-ui .button.button-hero {
        font-size: 14px;
        height: 46px;
        line-height: 44px;
        padding: 0 36px;
    }
    #hwpwrap .wp-core-ui .button:active, #hwpwrap .wp-core-ui .button:focus {
        outline: 0;
    }
    #hwpwrap .wp-core-ui .button.hidden {
        display: none;
    }
    #hwpwrap .wp-core-ui input[type=reset], #hwpwrap .wp-core-ui input[type=reset]:active, #hwpwrap .wp-core-ui input[type=reset]:focus, #hwpwrap .wp-core-ui input[type=reset]:hover {
        background: 0 0;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding: 0 2px 1px;
        width: auto;
    }
    #hwpwrap .wp-core-ui .button, #hwpwrap .wp-core-ui .button-secondary {
        color: #555;
        border-color: #ccc;
        background: #f7f7f7;
        -webkit-box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0, 0, 0, 0.08);
        box-shadow: inset 0 1px 0 #fff, 0 1px 0 rgba(0, 0, 0, 0.08);
        vertical-align: top;
    }
    #hwpwrap .wp-core-ui p .button {
        vertical-align: baseline;
    }
    #hwpwrap .wp-core-ui .button-secondary:focus, #hwpwrap .wp-core-ui .button-secondary:hover, #hwpwrap .wp-core-ui .button.focus, #hwpwrap .wp-core-ui .button.hover, #hwpwrap .wp-core-ui .button:focus, #hwpwrap .wp-core-ui .button:hover {
        background: #fafafa;
        border-color: #999;
        color: #222;
    }
    #hwpwrap .wp-core-ui .button-secondary:focus, #hwpwrap .wp-core-ui .button.focus, #hwpwrap .wp-core-ui .button:focus {
        -webkit-box-shadow: 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
        box-shadow: 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
    }
    #hwpwrap .wp-core-ui .button-secondary:active, #hwpwrap .wp-core-ui .button.active, #hwpwrap .wp-core-ui .button.active:hover, #hwpwrap .wp-core-ui .button:active {
        background: #eee;
        border-color: #999;
        color: #333;
        -webkit-box-shadow: inset 0 2px 5px -3px rgba(0, 0, 0, 0.5);
        box-shadow: inset 0 2px 5px -3px rgba(0, 0, 0, 0.5);
    }
    #hwpwrap .wp-core-ui .button.active:focus {
        -webkit-box-shadow: inset 0 2px 5px -3px rgba(0, 0, 0, 0.5), 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
        box-shadow: inset 0 2px 5px -3px rgba(0, 0, 0, 0.5), 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
    }
    #hwpwrap .wp-core-ui .button-disabled, #hwpwrap .wp-core-ui .button-secondary.disabled, #hwpwrap .wp-core-ui .button-secondary:disabled, #hwpwrap .wp-core-ui .button-secondary[disabled], #hwpwrap .wp-core-ui .button.disabled, #hwpwrap .wp-core-ui .button:disabled, #hwpwrap .wp-core-ui .button[disabled] {
        color: #aaa !important;
        border-color: #ddd !important;
        background: #f7f7f7 !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        text-shadow: 0 1px 0 #fff !important;
        cursor: default;
    }
    #hwpwrap .wp-core-ui .button-primary {
        background: #2ea2cc;
        border-color: #0074a2;
        -webkit-box-shadow: inset 0 1px 0 rgba(120, 200, 230, 0.5), 0 1px 0 rgba(0, 0, 0, 0.15);
        box-shadow: inset 0 1px 0 rgba(120, 200, 230, 0.5), 0 1px 0 rgba(0, 0, 0, 0.15);
        color: #fff;
        text-decoration: none;
    }
    #hwpwrap .wp-core-ui .button-primary.focus, #hwpwrap .wp-core-ui .button-primary.hover, #hwpwrap .wp-core-ui .button-primary:focus, #hwpwrap .wp-core-ui .button-primary:hover {
        background: #1e8cbe;
        border-color: #0074a2;
        -webkit-box-shadow: inset 0 1px 0 rgba(120, 200, 230, 0.6);
        box-shadow: inset 0 1px 0 rgba(120, 200, 230, 0.6);
        color: #fff;
    }
    #hwpwrap .wp-core-ui .button-primary.focus, #hwpwrap .wp-core-ui .button-primary:focus {
        border-color: #0e3950;
        -webkit-box-shadow: inset 0 1px 0 rgba(120, 200, 230, 0.6), 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
        box-shadow: inset 0 1px 0 rgba(120, 200, 230, 0.6), 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, 0.8);
    }
    #hwpwrap .wp-core-ui .button-primary.active, #hwpwrap .wp-core-ui .button-primary.active:focus, #hwpwrap .wp-core-ui .button-primary.active:hover, #hwpwrap .wp-core-ui .button-primary:active {
        background: #1b7aa6;
        border-color: #005684;
        color: rgba(255, 255, 255, 0.95);
        -webkit-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1);
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1);
        vertical-align: top;
    }
    #hwpwrap .wp-core-ui .button-primary-disabled, #hwpwrap .wp-core-ui .button-primary.disabled, #hwpwrap .wp-core-ui .button-primary:disabled, #hwpwrap .wp-core-ui .button-primary[disabled] {
        color: #94cde7 !important;
        background: #298cba !important;
        border-color: #1b607f !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.1) !important;
        cursor: default;
    }
    #hwpwrap .wp-core-ui .button-group {
        position: relative;
        display: inline-block;
        white-space: nowrap;
        font-size: 0;
        vertical-align: middle;
    }
    #hwpwrap .wp-core-ui .button-group > .button {
        display: inline-block;
        -webkit-border-radius: 0;
        border-radius: 0;
        margin-right: -1px;
        z-index: 10;
    }
    #hwpwrap .wp-core-ui .button-group > .button-primary {
        z-index: 100;
    }
    #hwpwrap .wp-core-ui .button-group > .button:hover {
        z-index: 20;
    }
    #hwpwrap .wp-core-ui .button-group > .button:first-child {
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;
    }
    #hwpwrap .wp-core-ui .button-group > .button:last-child {
        -webkit-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
    }
    #hwpwrap .wp-core-ui .button-group > .button:focus {
        position: relative;
        z-index: 1;
    }
    @media screen and (max-width: 782px) {
        #hwpwrap .wp-core-ui .button, #hwpwrap .wp-core-ui .button.button-large, #hwpwrap .wp-core-ui .button.button-small, #hwpwrap a.preview, #hwpwrap input#publish, #hwpwrap input#save-post {
            padding: 6px 14px;
            line-height: normal;
            font-size: 14px;
            vertical-align: middle;
            height: auto;
            margin-bottom: 4px;
        }
    }
    #hwpwrap #menu-management-liquid {
        float: left;
        min-width: 100%;
        margin-top: 3px;
    }
    @media screen and (max-width: 782px) {
        #hwpwrap #menu-management-liquid {
            margin-top: 25px;
        }
    }
    #hwpwrap .description-wide {
        width: 90%;
    }
</style>
