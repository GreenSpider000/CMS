<?php

namespace AlexStack\LaravelCms;

use Illuminate\Database\Seeder;

class CmsSettingsTableSeeder extends Seeder
{
    private $config;
    private $table_name;

    public function __construct()
    {
        $this->config     = include base_path('config/laravel-cms.php');
        $this->table_name = $this->config['table_name']['settings'];
    }

    /**
     * Auto generated seed file.
     */
    public function run()
    {
        \DB::table($this->table_name)->delete();

        \DB::table($this->table_name)->insert([
            0 => [
                //'id'          => 2,
                'param_name'  => 'page_footer',
                'page_id'     => null,
                'param_value' => '<div class="row justify-content-center">
<div class="col-md pt-5 pb-5 text-center bg-light footer">
<span class="small  text-secondary">Made with <i class="fas fa-heart"></i> by <a href="https://github.com/AlexStack/Laravel-CMS" target="_blank" class=" text-secondary">Laravel CMS</a> @ '.date('Y').'</span>
</div>
</div>',
                'input_attribute' => '{"rows":15,"required":"required"}',
                'abstract'        => '',
                'category'        => 'global',
                'enabled'         => 1,
                'sort_value'      => 980,
                // 'created_at'      => '2019-08-30 10:56:52',
                // 'updated_at'      => '2019-09-05 15:12:38',
                // 'deleted_at'      => null,
            ],
            1 => [
                // 'id'              => 3,
                'param_name'      => 'favicon_url',
                'page_id'         => null,
                'param_value'     => '/laravel-cms/frontend/images/favicon-32x32.png',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => '',
                'category'        => 'global',
                'enabled'         => 1,
                'sort_value'      => 80,
                // 'created_at'      => '2019-08-30 11:47:18',
                // 'updated_at'      => '2019-09-11 11:31:52',
                // 'deleted_at'      => null,
            ],
            2 => [
                // 'id'          => 6,
                'param_name'  => 'page_top',
                'page_id'     => null,
                'param_value' => '<div class="row justify-content-end">
<div class="col-md text-right text-secondary page_top">
<i class="fab fa-facebook-square mr-3" style="color:#395599;"></i>
<i class="fab fa-twitter-square mr-3" style="color:#2caae1;"></i>
<a href="ROUTE(LaravelCmsPages.show,\'Contact-Us.html\')" class="text-success"><i class="fas fa-envelope mr-3"></i></a>
<a href="ROUTE(LaravelCmsPages.show,SETTING(system.reserved_slugs.search))" class="text-primary"><i class="fas fa-search mr-4"></i></a>
</div>
</div>',
                'input_attribute' => '{"rows":11,"required":"required"}',
                'abstract'        => null,
                'category'        => 'global',
                'enabled'         => 1,
                'sort_value'      => 999,
                // 'created_at'      => '2019-09-03 09:11:34',
                // 'updated_at'      => '2019-09-11 11:31:43',
                // 'deleted_at'      => null,
            ],
            3 => [
                // 'id'              => 7,
                'param_name'      => 'top_logo',
                'page_id'         => null,
                'param_value'     => '/laravel-cms/frontend/images/top-logo.png',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'global',
                'enabled'         => 1,
                'sort_value'      => 90,
                // 'created_at'      => '2019-09-05 10:09:16',
                // 'updated_at'      => '2019-09-05 14:35:23',
                // 'deleted_at'      => null,
            ],
            4 => [
                // 'id'              => 9,
                'param_name'      => 'frontend_dir',
                'page_id'         => null,
                'param_value'     => 'frontend',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'template',
                'enabled'         => 1,
                'sort_value'      => 66,
                // 'created_at'      => '2019-09-05 13:37:01',
                // 'updated_at'      => '2019-09-09 13:34:03',
                // 'deleted_at'      => null,
            ],
            5 => [
                // 'id'              => 10,
                'param_name'      => 'backend_dir',
                'page_id'         => null,
                'param_value'     => 'backend',
                'input_attribute' => null,
                'abstract'        => null,
                'category'        => 'template',
                'enabled'         => 1,
                'sort_value'      => null,
                // 'created_at'      => '2019-09-05 13:37:20',
                // 'updated_at'      => '2019-09-09 13:34:24',
                // 'deleted_at'      => null,
            ],
            6 => [
                // 'id'              => 11,
                'param_name'      => 'frontend_language',
                'page_id'         => null,
                'param_value'     => $this->config['template']['backend_language'],
                'input_attribute' => '{"select_options":{"en":"English", "zh":"Chinese", "es":"Spanish", "ar": "Arabic", "ja": "Japanese", "hi":"Hindi", "pt":"Portuguese", "fr":"French", "ru":"Russian", "de":"German", "ko":"Korean", "it":"Italian", "la":"Latin"},"required": "required"}',
                'abstract'        => null,
                'category'        => 'template',
                'enabled'         => 1,
                'sort_value'      => 60,
                // 'created_at'      => '2019-09-05 13:37:41',
                // 'updated_at'      => '2019-09-11 11:32:33',
                // 'deleted_at'      => null,
            ],
            7 => [
                // 'id'              => 12,
                'param_name'      => 'slug_format',
                'page_id'         => null,
                'param_value'     => 'from_title',
                'input_attribute' => '{"select_options":{
"from_title":"Generate slug from page title",
"id":"Generate slug from page numeric id",
"pinyin":"Generate slug from page title and translate to Chinese PinYin"},
"required":"required"}',
                'abstract'   => null,
                'category'   => 'system',
                'enabled'    => 1,
                'sort_value' => 45,
                // 'created_at' => '2019-09-05 13:41:53',
                // 'updated_at' => '2019-09-11 11:32:10',
                // 'deleted_at' => null,
            ],
            8 => [
                // 'id'              => 13,
                'param_name'      => 'slug_suffix',
                'page_id'         => null,
                'param_value'     => '.html',
                'input_attribute' => '{"select_options":{".html":"Set default page URL with .html suffix",
"":"Set default page URL without suffix", ".jsp":"Set default page URL with .jsp suffix",
".asp":"Set default page URL with .asp suffix", ".htm":"Set default page URL with .htm suffix"},
"required":"required"}',
                'abstract'   => null,
                'category'   => 'system',
                'enabled'    => 1,
                'sort_value' => 42,
                // 'created_at' => '2019-09-05 13:42:14',
                // 'updated_at' => '2019-09-06 09:10:06',
                // 'deleted_at' => null,
            ],
            9 => [
                // 'id'              => 14,
                'param_name'      => 'slug_separate',
                'page_id'         => null,
                'param_value'     => '-',
                'input_attribute' => '{"select_options":{"-":"Separate words with symbol hyphen - for page URL",
"_":"Separate words with symbol underscore _ for page URL",
"":"Separate words without any symbol for page URL"},
"required":"required"}',
                'abstract'   => null,
                'category'   => 'system',
                'enabled'    => 0,
                'sort_value' => 40,
                // 'created_at' => '2019-09-05 13:43:28',
                // 'updated_at' => '2019-09-05 16:52:28',
                // 'deleted_at' => null,
            ],
            10 => [
                // 'id'              => 15,
                'param_name'      => 'upload_dir',
                'page_id'         => null,
                'param_value'     => 'laravel-cms/uploads',
                'input_attribute' => '{
"rows":1,
"required":"required",
"pattern":"[a-zA-Z0-9\\\\-_/]{2,60}"
}',
                'abstract'   => null,
                'category'   => 'file',
                'enabled'    => 0,
                'sort_value' => 50,
                // 'created_at' => '2019-09-05 13:51:25',
                // 'updated_at' => '2019-09-09 13:38:14',
                // 'deleted_at' => null,
            ],
            11 => [
                // 'id'              => 16,
                'param_name'      => 'image_encode',
                'page_id'         => null,
                'param_value'     => 'jpg',
                'input_attribute' => '{"select_options":{
"jpg":"Encode image with jpg format, smaller size",
"png":"Encode image with png format, better quality"},
"required":"required"}',
                'abstract'   => null,
                'category'   => 'file',
                'enabled'    => 1,
                'sort_value' => 10,
                // 'created_at' => '2019-09-05 15:01:56',
                // 'updated_at' => '2019-09-09 13:22:20',
                // 'deleted_at' => null,
            ],
            12 => [
                // 'id'              => 18,
                'param_name'      => 'google_recaptcha_site_key',
                'page_id'         => null,
                'param_value'     => '',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'inquiry',
                'enabled'         => 1,
                'sort_value'      => 35,
                // 'created_at'      => '2019-09-05 17:11:23',
                // 'updated_at'      => '2019-09-05 17:11:23',
                // 'deleted_at'      => null,
            ],
            13 => [
                // 'id'              => 19,
                'param_name'      => 'google_recaptcha_secret_key',
                'page_id'         => null,
                'param_value'     => '',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'inquiry',
                'enabled'         => 1,
                'sort_value'      => 33,
                // 'created_at'      => '2019-09-05 17:11:57',
                // 'updated_at'      => '2019-09-05 17:19:14',
                // 'deleted_at'      => null,
            ],
            14 => [
                // 'id'          => 21,
                'param_name'  => 'page-tab-inquiry-form',
                'page_id'     => null,
                'param_value' => '{
"blade_file" : "inquiry",
"tab_name" : "<i class=\'fas fa-edit mr-1\'></i>__(inquiry,form)",
"php_class"  : "AlexStack\\\\LaravelCms\\\\Helpers\\\\LaravelCmsPluginInquiry"
}',
                'input_attribute' => '{
"rows":11,
"required":"required"
}',
                'abstract'   => null,
                'category'   => 'plugin',
                'enabled'    => 1,
                'sort_value' => 110,
                // 'created_at' => '2019-09-07 09:28:02',
                // 'updated_at' => '2019-09-11 11:33:01',
                // 'deleted_at' => null,
            ],
            15 => [
                // 'id'          => 22,
                'param_name'  => 'page-tab-preview',
                'page_id'     => null,
                'param_value' => '{
"blade_file" : "preview",
"tab_name" : "<i class=\'fas fa-eye mr-1\'></i>__(preview)",
"php_class"  : ""
}',
                'input_attribute' => '{
"rows":11,
"required":"required"
}',
                'abstract'   => null,
                'category'   => 'plugin',
                'enabled'    => 1,
                'sort_value' => 100,
                // 'created_at' => '2019-09-07 09:41:06',
                // 'updated_at' => '2019-09-09 20:18:27',
                // 'deleted_at' => null,
            ],
            16 => [
                // 'id'          => 24,
                'param_name'  => 'admin_setting_tabs',
                'page_id'     => null,
                'param_value' => '{
"global" : "<i class=\'fas fa-cog mr-1\'></i>__(global,settings)",
"template" : "<i class=\'fas fa-globe mr-1\'></i>__(template)",
"file" : "<i class=\'fas fa-image mr-1\'></i>__(file)",
"inquiry" : "<i class=\'fas fa-user-edit mr-1\'></i>__(inquiry)",
"plugin" : "<i class=\'fas fa-cogs mr-1\'></i>__(plugin)",
"system" : "<i class=\'fas fa-cubes mr-1\'></i>__(system)"
}',
                'input_attribute' => '{"rows":11,"required":"required"}',
                'abstract'        => null,
                'category'        => 'system',
                'enabled'         => 1,
                'sort_value'      => 98,
                // 'created_at'      => '2019-09-07 14:53:34',
                // 'updated_at'      => '2019-09-11 11:35:32',
                // 'deleted_at'      => null,
            ],
            17 => [
                // 'id'              => 26,
                'param_name'      => 'large_image_width',
                'page_id'         => null,
                'param_value'     => '1000',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'file',
                'enabled'         => 1,
                'sort_value'      => 110,
                // 'created_at'      => '2019-09-08 11:40:37',
                // 'updated_at'      => '2019-09-11 11:34:23',
                // 'deleted_at'      => null,
            ],
            18 => [
                // 'id'              => 27,
                'param_name'      => 'small_image_width',
                'page_id'         => null,
                'param_value'     => '150',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'file',
                'enabled'         => 1,
                'sort_value'      => 100,
                // 'created_at'      => '2019-09-08 11:41:21',
                // 'updated_at'      => '2019-09-11 11:34:45',
                // 'deleted_at'      => null,
            ],
            19 => [
                // 'id'              => 28,
                'param_name'      => 'small_image_height',
                'page_id'         => null,
                'param_value'     => '100',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'file',
                'enabled'         => 1,
                'sort_value'      => 90,
                // 'created_at'      => '2019-09-08 11:57:59',
                // 'updated_at'      => '2019-09-11 11:34:52',
                // 'deleted_at'      => null,
            ],
            20 => [
                // 'id'              => 29,
                'param_name'      => 'middle_image_width',
                'page_id'         => null,
                'param_value'     => '300',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'file',
                'enabled'         => 1,
                'sort_value'      => 109,
                // 'created_at'      => '2019-09-08 12:10:19',
                // 'updated_at'      => '2019-09-11 11:34:36',
                // 'deleted_at'      => null,
            ],
            21 => [
                // 'id'              => 30,
                'param_name'      => 'middle_image_height',
                'page_id'         => null,
                'param_value'     => '200',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'file',
                'enabled'         => 1,
                'sort_value'      => 108,
                // 'created_at'      => '2019-09-08 12:10:37',
                // 'updated_at'      => '2019-09-09 16:57:22',
                // 'deleted_at'      => null,
            ],
            22 => [
                // 'id'          => 31,
                'param_name'  => 'admin_menu_links',
                'page_id'     => null,
                'param_value' => '{
"dashboard" : {"style" : "dropdown",      "button" : "<a class=\'btn btn-success mr-3 dropdown-toggle\' href=\'ROUTE(LaravelCmsAdmin.index)\' role=\'button\'  data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'><i class=\'fas fa-home mr-1\'></i>__(dashboard)</a>",      "items" : [        	"<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsAdmin.index)\' ><i class=\'fas fa-tachometer-alt mr-1 text-success\'></i>__(dashboard)</a>",        	"<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsPages.index)\' target=\'_blank\'><i class=\'fas fa-eye mr-1 text-primary\'></i>__(preview,website)</a>",            "<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsPluginInquiry.index)\'><i class=\'fas fa-user-edit mr-1 text-info\'></i>__(all,inquiries)</a>",        	"<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsAdmin.show, \'logout\')\'><i class=\'fas fa-sign-out-alt mr-2 text-warning\'></i>__(logout)</a>"]},

"all_page" : "<a class=\'btn btn-primary mr-3\' href=\'ROUTE(LaravelCmsAdminPages.index)\' role=\'button\'><i class=\'fas fa-atlas mr-1\'></i>__(all_page)</a>",
"cms_settings" : "<a class=\'btn btn-secondary mr-3\' href=\'ROUTE(LaravelCmsAdminSettings.index)\' role=\'button\'><i class=\'fas fa-cog mr-1\'></i>CMS __(\'settings\') </a>",
"file_manager": "<a class=\'btn btn-info\' href=\'ROUTE(LaravelCmsAdminFiles.index)\' role=\'button\'><i class=\'fas fa-file-alt mr-1\'></i>__(file,manager)</a>"
}',
                'input_attribute' => '{"rows":11,"required":"required"}',
                'abstract'        => null,
                'category'        => 'system',
                'enabled'         => 1,
                'sort_value'      => 200,
                // 'created_at'      => '2019-09-09 09:41:35',
                // 'updated_at'      => '2019-09-09 12:46:43',
                // 'deleted_at'      => null,
            ],
            23 => [
                // 'id'              => 32,
                'param_name'      => 'backend_language',
                'page_id'         => null,
                'param_value'     => $this->config['template']['backend_language'],
                'input_attribute' => '{"select_options":{"en":"English", "zh":"Chinese", "es":"Spanish", "ar": "Arabic", "ja": "Japanese", "hi":"Hindi", "pt":"Portuguese", "fr":"French", "ru":"Russian", "de":"German", "ko":"Korean", "it":"Italian", "la":"Latin"},"required": "required"}',
                'abstract'        => null,
                'category'        => 'template',
                'enabled'         => 1,
                'sort_value'      => 50,
                // 'created_at'      => '2019-09-09 14:26:18',
                // 'updated_at'      => '2019-09-11 11:32:27',
                // 'deleted_at'      => null,
            ],
            24 => [
                // 'id'              => 33,
                'param_name'      => 'number_per_page',
                'page_id'         => null,
                'param_value'     => '16',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'file',
                'enabled'         => 1,
                'sort_value'      => 89,
                // 'created_at'      => '2019-09-11 09:51:57',
                // 'updated_at'      => '2019-09-11 10:02:16',
                // 'deleted_at'      => null,
            ],
            25 => [
                // 'id'              => 34,
                'param_name'      => 'site_name',
                'page_id'         => null,
                'param_value'     => config('app.name'),
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => '',
                'category'        => 'global',
                'enabled'         => 1,
                'sort_value'      => 8888,
                // 'created_at'      => '2019-09-15 11:47:18',
                // 'updated_at'      => '2019-09-16 11:31:52',
                // 'deleted_at'      => null,
            ],
            26 => [
                // 'id'              => 35,
                'param_name'      => 'default_setting_id',
                'page_id'         => null,
                'param_value'     => '1',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'inquiry',
                'enabled'         => 1,
                'sort_value'      => 68,
                // 'created_at'      => '2019-09-05 17:11:23',
                // 'updated_at'      => '2019-09-05 17:11:23',
                // 'deleted_at'      => null,
            ],
            27 => [
                // 'id'              => 36,
                'param_name'      => 'number_per_page',
                'page_id'         => null,
                'param_value'     => '20',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'inquiry',
                'enabled'         => 1,
                'sort_value'      => 60,
                // 'created_at'      => '2019-09-05 17:11:23',
                // 'updated_at'      => '2019-09-05 17:11:23',
                // 'deleted_at'      => null,
            ],
            28 => [
                // 'id'              => 37,
                'param_name'      => 'enable_form_by_default',
                'page_id'         => null,
                'param_value'     => '0',
                'input_attribute' => '{"select_options":{"1":"__(enable)", "0":"__(disable)"},"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'inquiry',
                'enabled'         => 1,
                'sort_value'      => 60,
                // 'created_at'      => '2019-09-05 17:11:23',
                // 'updated_at'      => '2019-09-05 17:11:23',
                // 'deleted_at'      => null,
            ],
            29 => [
                'param_name'      => 'allow_json_response',
                'page_id'         => null,
                'param_value'     => '1',
                'input_attribute' => '{"select_options":{"1":"__(yes)", "0":"__(no)"},"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'system',
                'enabled'         => 0,
                'sort_value'      => 30,
            ],
            30 => [
                'param_name'      => 'full_screen',
                'page_id'         => null,
                'param_value'     => '0',
                'input_attribute' => '{"select_options":{"1":"__(yes)", "0":"__(no)"},"rows":1,"required":"required"}',
                'abstract'        => null,
                'category'        => 'template',
                'enabled'         => 0,
                'sort_value'      => 77,
            ],
            31 => [
                'param_name'      => 'cms_admin',
                'page_id'         => null,
                'param_value'     => '{
    "super_admin" : [1],
    "web_admin" : [1,2],
    "content_admin": [3,1]
}',
                'input_attribute' => '{"rows":6,"required":"required"}',
                'abstract'        => null,
                'category'        => 'system',
                'enabled'         => 0,
                'sort_value'      => 20,
            ],
            32 => [
                'param_name'      => 'reserved_slugs',
                'page_id'         => null,
                'param_value'     => '{
"search" : "Search-CMS.html",
"sitemap" : "sitemap.txt",
"redirect" : "redirect-link",
"tag" : "List-Tag.html"
}',
                'input_attribute' => '{"rows":6,"required":"required"}',
                'abstract'        => null,
                'category'        => 'system',
                'enabled'         => 0,
                'sort_value'      => 20,
            ],
            33 => [
                'param_name'      => 'page_bottom',
                'page_id'         => null,
                'param_value'     => '<!-- Any code that may affect the speed of load page, it will display at the bottom and just before the </body>, it\'s good for analytics code, ads code etc. -->',
                'input_attribute' => '{"rows":6,"required":"required"}',
                'abstract'        => null,
                'category'        => 'global',
                'enabled'         => 0,
                'sort_value'      => 5,
            ],
            34 => [
                'param_name'      => 'page_head',
                'page_id'         => null,
                'param_value'     => '<!-- Any extra code that has to be put in the <head></head> eg. css,script,meta,link -->',
                'input_attribute' => '{"rows":6,"required":"required"}',
                'abstract'        => null,
                'category'        => 'global',
                'enabled'         => 0,
                'sort_value'      => 3,
            ],
        ]);
    }
}
