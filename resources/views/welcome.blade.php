{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/template/cargohub/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 13:58:57 GMT -->

<head>
    <meta charset="utf-8">
    <title>CargoHub</title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- flaticon css -->
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet">
    <!-- factoryplus-icons css -->
    <link href="{{ asset('frontend/css/factoryplus-icons.css') }}" rel="stylesheet">
    <!-- animate css -->
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="{{ asset('frontend/css/owl.css') }}" rel="stylesheet">
    <!-- fancybox css -->
    <link href="{{ asset('frontend/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <!-- switcher css -->
    <link href="{{ asset('frontend/css/switcher.css') }}" rel="stylesheet">
    <link rel='stylesheet' id='factoryhub-color-switcher-css'
        href='{{ asset('frontend/css/switcher/default.css') }}' />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolution/navigation.css') }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
</head>

<body class="home header-transparent  header-sticky header-v1 hide-topbar-mobile">
    <div id="page">

        <!-- Preloader-->
        {{-- <div class="preloader"></div> --}}

        <!-- topbar -->
        <div id="fh-header-minimized" class="fh-header-minimized fh-header-v1"></div>
        <div id="topbar" class="topbar">
            <div class="container">

                <div class="topbar-left topbar-widgets text-left">
                    <div id="cargo-office-location-widget-2" class="widget cargo-office-location-widget">
                        <div class="office-location clearfix">
                            {{-- <div class="office-switcher"><i class="flaticon-globe "></i>
                                <a class="current-office" href="#">Newyork Office</a>
                                <ul>
                                    <li>Newyork Office</li>
                                    <li>London Office</li>
                                    <li>Tokyo Office</li>
                                </ul>
                            </div> --}}
                            <ul class="topbar-office active">
                                <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +012 345 6789</li>
                                <li><i class="flaticon-web" aria-hidden="true"></i>Mail@CargoHub.com</li>
                                <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, NY 10012, USA</li>
                            </ul>
                            <ul class="topbar-office">
                                <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +099 222 1111</li>
                                <li><i class="flaticon-web" aria-hidden="true"></i>Mail@Evanto.com</li>
                                <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, LD 32614, UK</li>
                            </ul>
                            <ul class="topbar-office">
                                <li><i class="flaticon-telephone" aria-hidden="true"></i>Phone +098 765 4321</li>
                                <li><i class="flaticon-web" aria-hidden="true"></i>Mail@Steelthemes.com</li>
                                <li><i class="flaticon-pin" aria-hidden="true"></i>Cargo Hub, Tokyo 32614, Japan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="topbar-right topbar-widgets text-right">
                    <div class="widget cargohub-social-links-widget">
                        <div class="list-social style-1">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="widget cargo-search-widget">
                        <div class="topbar-search topbar-search-1">
                            <a href="#" class="toggle-search" id="toggle-search"><i class="fa fa-search"
                                    aria-hidden="true"></i></a>
                            <form class="search-form" action="#">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="search" class="search-field" placeholder="Search..." value="">
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- topbar end -->

        <!-- masthead -->
        <header id="masthead" class="site-header clearfix">

            <div class="header-main clearfix">
                <div class="container mobile_relative">
                    <div class="row">
                        <div class="site-logo col-md-3 col-sm-6 col-xs-6">
                            <a href="index-2.html" class="logo">
                                <img src="{{ asset('frontend/images/logo-light.png') }}" alt="CargoHub" class="logo-light show-logo">
                                <img src="{{ asset('frontend/images/logo.png') }}" alt="CargoHub" class="logo-dark hide-logo">
                            </a>
                            <h1 class="site-title"><a href="#">CargoHub</a></h1>
                            <h2 class="site-description">Just another Steel Themes Sites site</h2>
                        </div>
                        <div class="site-menu col-md-9 col-sm-6 col-xs-6">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu">
                                    <li class="active has-children"><a href="index-2.html"
                                            class="dropdown-toggle">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Home Page 1</a></li>
                                            <li><a href="home-page-2.html">Home Page 2</a></li>
                                            <li><a href="home-page-3.html">Home Page 3</a></li>
                                            <li><a href="home-page-4.html">Home Page 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="services.html"
                                            class="dropdown-toggle">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">All Services</a></li>
                                            <li><a href="road-freight-forwarding.html">Road Freight Forwarding</a></li>
                                            <li><a href="ocean-freight-forwarding.html">Ocean Freight Forwarding</a>
                                            </li>
                                            <li><a href="air-freight-forwarding.html">Air Freight Forwarding</a></li>
                                            <li><a href="warehousing.html">Warehousing</a></li>
                                            <li><a href="door-to-door-delivery.html">Door to Door Delivery</a></li>
                                            <li><a href="ground-transport.html">Ground Transport</a></li>
                                            <li><a href="worldwide-transport.html">Worldwide Transport</a></li>
                                            <li><a href="cargo-service.html">Cargo Service</a></li>
                                            <li><a href="packaging-storage.html">Packaging &#038; Storage</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#" class="dropdown-toggle">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="faqs.html">FAQS</a></li>
                                            <li><a href="our-prices.html">Our Prices</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="gallery.html"
                                            class="dropdown-toggle">Gallery</a>
                                        <ul class="sub-menu">
                                            <li><a href="gallery-column-4.html">Gallery Four Columns</a></li>
                                            <li><a href="gallery-column-3.html">Gallery Three Columns</a></li>
                                            <li><a href="gallery.html">Gallery Two Columns</a></li>
                                            <li><a href="gallery-single.html">Gallery Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#" class="dropdown-toggle">Features</a>
                                        <ul class="sub-menu">
                                            <li><a href="request-a-quote.html">Request A Quote</a></li>
                                            <li><a href="track-your-shipment.html">Track Your Shipment</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog.html" class="dropdown-toggle">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-column-2.html">Blog Two Columns</a></li>
                                            <li><a href="blog-column-3.html">Blog Three Columns</a></li>
                                            <li><a href="blog-column-4.html">Blog Four Columns</a></li>
                                            <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                            <li><a href="blog-single.html">Blog Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li class="extra-menu-item menu-item-button-link">
                                        <a href="request-a-quote.html" class="fh-btn btn">Get A Quote</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <a href="#" class="navbar-toggle">
                        <span class="navbar-icon">
                            <span class="navbars-line"></span>
                        </span>
                    </a>
                </div>
            </div>

        </header>

        <!-- masthead end -->

        <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">

                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend/images/slide03.jpg') }}" alt="" title="Home Page 1"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme" id="slide-3-layer-9"
                            data-x="['left','left','left','left']" data-hoffset="['495','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['310','210','210','154']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;"><img src="{{ asset('frontend/images/main-slider/slide-bg.png') }}" alt=""
                                data-ww="['674px','674px','674px','674px']"
                                data-hh="['398px','398px','398px','398px']" width="674" height="398"
                                data-no-retina> </div>

                        <!-- LAYER NR. 16 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-3-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['350','250','250','210']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; letter-spacing: 0px;">WORLDWIDE </div>

                        <!-- LAYER NR. 17 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-3-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['420','330','330','250']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; letter-spacing: 0px;">LOGISTIC SERVICES </div>

                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-3-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['505','415','415','315']"
                            data-fontsize="['24','24','24','18']" data-lineheight="['24','24','24','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; letter-spacing: 0px;">Dedicated employees, working
                            in 06 regional</div>

                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-3-layer-4"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['545','455','455','340']"
                            data-fontsize="['24','24','24','18']" data-lineheight="['24','24','24','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 9; white-space: nowrap; letter-spacing: 0px;">around the globe, deliver
                            operational</div>

                        <!-- LAYER NR. 20 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-3-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['610','520','520','400']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 10; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                            us </a>

                        <!-- LAYER NR. 21 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-3-layer-7"
                            data-x="['left','left','left','left']" data-hoffset="['750','250','270','40']"
                            data-y="['top','top','top','top']" data-voffset="['610','520','520','480']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 11; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Request
                            Quote </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend/images/slide01.jpg') }}" alt="" title="Home Page 1"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-9"
                            data-x="['left','left','left','left']" data-hoffset="['495','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['310','210','310','170']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;"><img src="{{ asset('frontend/images/main-slider/slide-bg.png') }}" alt=""
                                data-ww="['674px','674px','674px','674px']"
                                data-hh="['398px','398px','398px','398px']" width="674" height="398"
                                data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-1-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['350','250','350','200']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; letter-spacing: 0px;">WE CARE ABOUT
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-1-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['550','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['420','330','410','245']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; letter-spacing: 0px;">YOUR CARGO </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-1-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['505','415','515','340']"
                            data-fontsize="['24','24','18','18']" data-lineheight="['24','24','18','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; letter-spacing: 0px;">Dedicated employees, working
                            in 06 regional</div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-1-layer-4"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['540','455','540','365']"
                            data-fontsize="['24','24','18','18']" data-lineheight="['24','24','18','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 9; white-space: nowrap; letter-spacing: 0px;">around the globe, deliver
                            operational </div>

                        <!-- LAYER NR. 6 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-1-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['540','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['600','520','620','430']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 10; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                            us </a>

                        <!-- LAYER NR. 7 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-1-layer-7"
                            data-x="['left','left','left','left']" data-hoffset="['750','250','270','40']"
                            data-y="['top','top','top','top']" data-voffset="['600','520','620','500']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 11; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Request
                            Quote </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend/images/slide02.jpg') }}" alt="" title="Home Page 1"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="0" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2-layer-9"
                            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['285','185','255','185']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;"><img src="{{ asset('frontend/images/main-slider/slide-bg.png') }}" alt=""
                                data-ww="['755px','755px','755px','755px']"
                                data-hh="['446px','446px','446px','446px']" width="674" height="398"
                                data-no-retina> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-2-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['340','250','320','220']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; letter-spacing: 0px;">SHARED & DEDICATED </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption ch_title   tp-resizeme" id="slide-2-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['410','330','380','280']"
                            data-fontsize="['55','50','45','25']" data-lineheight="['55','50','45','25']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":500,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; letter-spacing: 0px;">WAREHOUSING </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-2-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['505','415','480','355']"
                            data-fontsize="['24','24','24','18']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; letter-spacing: 0px;">Dedicated employees, working
                            in 06 regional </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption ch_content   tp-resizeme" id="slide-2-layer-4"
                            data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['545','455','515','385']"
                            data-fontsize="['24','24','24','18']" data-lineheight="['24','24','24','18']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":700,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 9; white-space: nowrap; letter-spacing: 0px;">around the globe, deliver
                            operational </div>

                        <!-- LAYER NR. 13 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-2-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['40','40','40','40']"
                            data-y="['top','top','top','top']" data-voffset="['615','520','590','450']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 10; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">About
                            us </a>

                        <!-- LAYER NR. 14 -->
                        <a class="tp-caption ch_button rev-btn " href="#" target="_blank" id="slide-2-layer-7"
                            data-x="['left','left','left','left']" data-hoffset="['250','250','270','40']"
                            data-y="['top','top','top','top']" data-voffset="['615','520','590','530']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='' data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":800,"speed":1000,"text_c":"transparent","bg_c":"transparent","use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(255,0,0);bc:rgb(255,0,0);bw:1 1 1 1;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 11; white-space: nowrap; letter-spacing: px;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Request
                            Quote </a>
                    </li>
                </ul>
            </div>
        </section>
        <!--Main Slider  end-->

        <!-- Welcome sec -->
        <div class="welcomesec secpadd">
            <div class="container">
                <div class="fh-section-title clearfix  text-center version-dark paddbtm20">
                    <h2>Welcome to Cargo <span class="main-color">Hub</span></h2>
                </div>
                <p class="haeadingpara text-center paddbtm40">Cargo HUB is more than logistics.
                    <br /> We can also optimize your packaging, manage your materials sourcing, and so much more.
                </p>

                <div class="welservices row">
                    <div class="col-md-4 col-sm-6">
                        <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                            <span class="fh-icon"><i class="flaticon-transport-3"></i></span>
                            <h4 class="box-title"><a href="#">Air Freight Forwarding</a></h4>
                            <div class="desc">
                                <p>As a leader in global air freight forwarding, OIA Global excels in providing tailored
                                    transportation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                            <span class="fh-icon"><i class="flaticon-transport-4"></i></span>
                            <h4 class="box-title"><a href="#">Ocean Freight Forwarding</a></h4>
                            <div class="desc">
                                <p>Ocean Freight plays perhaps the most vital role in most transportation and supply
                                    chain solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="fh-icon-box icon-type-theme_icon style-1 version-dark hide-button icon-left">
                            <span class="fh-icon"><i class="flaticon-transport-5"></i></span>
                            <h4 class="box-title"><a href="#">Road Freight Forwarding</a></h4>
                            <div class="desc">
                                <p>Cargo are transported at some stage of their journey along the world’s roads where we
                                    give you a reassuring presence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome sec   end-->

        <!-- special services -->
        <section class="special_services bluebg secpadd">
            <div class="container">
                <div class="row paddbtm40">
                    <div class="col-md-4 col-sm-12">
                        <div class="fh-section-title clearfix  text-left version-light">
                            <h2>Our Special SERVICES</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="hdrgtpara lftredbrdr">
                            <p>Our warehousing services are known nationwide to be one of the most reliable, safe and
                                affordable, because we take pride in delivering the best of warehousing services, at the
                                most reasonable prices.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="fh-service-box icon-type-theme_icon style-1">
                            <span class="fh-icon"><i class="flaticon-open-cardboard-box"></i></span>
                            <h4 class="service-title"><a href="#" class="link" target="_blank">Packaging And
                                    Storage</a></h4>
                            <div class="desc">
                                <p>Package and store your things effectively and securely to make sure them in storage.
                                </p>
                            </div>
                        </div>
                        <div class="fh-service-box icon-type-theme_icon style-1">
                            <span class="fh-icon"><i class="flaticon-buildings"></i></span>
                            <h4 class="service-title"><a href="#" class="link"
                                    target="_blank">Warehousing</a></h4>
                            <div class="desc">
                                <p>Package and store your things effectively and securely to make sure them in storage.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="fh-service-box icon-type-theme_icon style-1">
                            <span class="fh-icon"><i class="flaticon-transport-9"></i></span>
                            <h4 class="service-title"><a href="#" class="link" target="_blank">Cargo</a>
                            </h4>
                            <div class="desc">
                                <p>Delivery of any freight from a place to another place quickly to save your cost and
                                    your time.</p>
                            </div>
                        </div>
                        <div class="fh-service-box icon-type-theme_icon style-1">
                            <span class="fh-icon"><i class="flaticon-transport-2"></i></span>
                            <h4 class="service-title"><a href="#" class="link" target="_blank">Door to Door
                                    Delivery</a></h4>
                            <div class="desc">
                                <p>Our expertise in transport management and planning allows us to design a solution.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="fh-service-box icon-type-theme_icon style-1">
                            <span class="fh-icon"><i class="flaticon-international-delivery"></i></span>
                            <h4 class="service-title"><a href="#" class="link" target="_blank">Worldwide
                                    Transport</a></h4>
                            <div class="desc">
                                <p>Specialises in international freight forwarding of merchandise and associated general
                                    logistic services.</p>
                            </div>
                        </div>
                        <div class="fh-service-box icon-type-theme_icon style-1">
                            <span class="fh-icon"><i class="flaticon-transport-1"></i></span>
                            <h4 class="service-title"><a href="#" class="link" target="_blank">Ground
                                    Transport</a></h4>
                            <div class="desc">
                                <p>Ground transportation options for all visitors, no matter your needs, schedule or
                                    destination.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- special services end -->

        <!--home counters -->
        <section class="homecounts">
            <div class="container">
                <h2 class="count-title">Cargo <span class="main-color">Hub</span> is a Global Supplier of Transport
                    and logistics Solutions.</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-lg-offset-2">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value">9800</div>
                                <h4>Delivered Package</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value">230</div>
                                <h4>Office Wordwide</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value">1200</div>
                                <h4>Employees</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="fh-counter icon-type-none">
                            <div class="counter">
                                <div class="value">5200</div>
                                <h4>Tons of Goods</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home counters end -->

        <!--why choose us -->
        <section class="whychoose-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6  secpaddlf">
                        <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                            <h2>Why Choosing us?</h2>
                        </div>
                        <div class="fh-icon-box  style-2 icon-left has-line">
                            <span class="fh-icon"><i class="flaticon-international-delivery"></i></span>
                            <h4 class="box-title"><span>Global supply Chain Solutions</span></h4>
                            <div class="desc">
                                <p>Efficiently unleash cross-media information without cross-media value.</p>
                            </div>
                        </div>
                        <div class="fh-icon-box  style-2 icon-left has-line">
                            <span class="fh-icon"><i class="flaticon-people"></i></span>
                            <h4 class="box-title"><span>24 Hours - Technical Support</span></h4>
                            <div class="desc">
                                <p>Specialises in international freight forwarding of merchandise and associated
                                    logistic services</p>
                            </div>
                        </div>
                        <div class="fh-icon-box  style-2 icon-left has-line">
                            <span class="fh-icon"><i class="flaticon-route"></i></span>
                            <h4 class="box-title"><span>Mobile Shipment Tracking</span></h4>
                            <div class="desc">
                                <p>We Offers intellgent concepts for road and tail and well as complex special transport
                                    services</p>
                            </div>
                        </div>
                        <div class="fh-icon-box  style-2 icon-left">
                            <span class="fh-icon"><i class="flaticon-open-cardboard-box"></i></span>
                            <h4 class="box-title"><span>Careful Handling of Valuable Goods</span></h4>
                            <div class="desc">
                                <p>Cargo HUB are transported at some stage of their journey along the world’s roads</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-md-6 quofrm1  secpaddlf">
                        <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                            <h2>REQUEST A QUOTE</h2>
                        </div>
                        <form>
                            <div class="fh-form-1 fh-form">
                                <div class="row fh-form-row">
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <select>
                                                <option value="Services">Services</option>
                                                <option value="Services 1">Services 1</option>
                                                <option value="Services 2">Services 2</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="delivery-city" value="" placeholder="Delivery City*"
                                                type="text">
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="distance" value="" placeholder="Distance*"
                                                type="text">
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="weight" value="" placeholder="Weight*"
                                                type="text">
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="your-name" value="" placeholder="Name*"
                                                type="text">
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p class="field">
                                            <input name="your-email" value="" placeholder="Email*"
                                                type="email">
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <p class="field single-field">
                                            <textarea cols="40" placeholder="Message*"></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="field submit">
                                            <input value="Submit" class="fh-btn" type="submit">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us end -->

        <!--partener -->
        <section class="partener-1 bluebg">
            <div class="container">
                <div class="fh-partner clearfix">
                    <div class="list-item slide-partener">
                        <div class="partner-item">
                            <div class="partner-content">
                                <a href="#" target="_self"><img alt="1764"
                                        src="{{ asset('frontend/images/partener/partner-4.png') }}"></a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="partner-content">
                                <a href="#" target="_self"><img alt="1763"
                                        src="{{ asset('frontend/images/partener/partner-3.png') }}"></a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="partner-content">
                                <a href="#" target="_self"><img alt="1762"
                                        src="{{ asset('frontend/images/partener/partner-2.png') }}"></a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="partner-content">
                                <a href="#" target="_self"><img alt="1761"
                                        src="{{ asset('frontend/images/partener/partner.png') }}"></a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="partner-content">
                                <a href="#" target="_self"><img alt="1765"
                                        src="{{ asset('frontend/images/partener/Fertilizers.png') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--partener end -->

        <!--testimonials -->
        <section class="testmonial-1">
            <div class="fh-testimonials-carousel fh-testimonials column-1">
                <div class="testi-list  single-slide">
                    <div class="testi-wrapper" style="background-image:url({{ 'frontend/images/main-slider/testi-1.jpg' }})">
                        <div class="container">
                            <div class="testi-item">
                                <span class="testi-icon"><i class="flaticon-quotations"></i></span>
                                <div class="testi-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i><i class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i><i class="fa fa-star fa-md"></i>
                                    </div>
                                    <div class="testi-des">These guys are just the coolest company ever! They were
                                        aware of our transported for road and tail and well as complex transport
                                        services.</div>
                                    <div class="info clearfix">
                                        <span class="testi-name">Magdalena Donowan</span>
                                        <span class="testi-job">CFD Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-wrapper" style="background-image:url({{ url('frontend/images/main-slider/testi-3.jpg') }})">
                        <div class="container">
                            <div class="testi-item">
                                <span class="testi-icon"><i class="flaticon-quotations "></i></span>
                                <div class="testi-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i><i class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i><i class="fa fa-star fa-md"></i>
                                    </div>
                                    <div class="testi-des">The shipping process with this crew was a pleasurable
                                        experience! They did all in time and with no safety incidents. Thank you so much
                                        guys!</div>
                                    <div class="info clearfix">
                                        <span class="testi-name">Emilia Crena</span>
                                        <span class="testi-job">CEO, VIP Construction, Australia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-wrapper" style="background-image:url({{ url('frontend/images/main-slider/testi-2.jpg') }})">
                        <div class="container">
                            <div class="testi-item">
                                <span class="testi-icon"><i class="flaticon-quotations "></i></span>
                                <div class="testi-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i><i class="fa fa-star fa-md"></i>
                                        <i class="fa fa-star fa-md"></i><i class="fa fa-star fa-md"></i>
                                    </div>
                                    <div class="testi-des">Their performance on our project was extremely successful.
                                        As a result of this collaboration, the project was built with exceptional
                                        quality &amp; delivered.</div>
                                    <div class="info clearfix">
                                        <span class="testi-name">Orlando E. Dougles</span>
                                        <span class="testi-job">CEO, Green Valley Inc, London</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonilas-->

        <!--news -->
        <section class="testmonial-1 secpadd">
            <div class="container">
                <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                    <h2>FEATURED NEWS</h2>
                </div>
                <div class="fh-latest-post carousel">
                    <div class="post-list  news-slide">
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-1.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">09</span>
                                    <span class="month">Aug</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">High Way</a>, <a
                                            href="#">Logistic</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">Air Cargo May Become Short-term
                                        Solution</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-2.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">09</span>
                                    <span class="month">Aug</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">High Way</a>, <a
                                            href="#">Logistic</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">We introduce new boat and flight
                                        service</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-3.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">26</span>
                                    <span class="month">Jul</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">Logistic</a>, <a
                                            href="#">Warehousing</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">Introduce new boat service in this
                                        spring</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-4.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">26</span>
                                    <span class="month">Jul</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">High Way</a>, <a
                                            href="#">Warehousing</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">Goods will be contain in certified safe
                                        warehouse</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-5.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">26</span>
                                    <span class="month">Jul</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">High Way</a>, <a
                                            href="#">Logistic</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">Our customer around the world satisty with
                                        it</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-6.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">25</span>
                                    <span class="month">Jul</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">Entrepreneurs</a>, <a
                                            href="#">Warehousing</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">We ensures you best the quality
                                        services</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-7.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">09</span>
                                    <span class="month">Aug</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">Logistic</a>, <a
                                            href="#">Pharmacology</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">Our Cargo trucking service</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-latest-post clearfix">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="{{ asset('frontend/images/blogs/blog-8.jpg') }}" alt="" /></a>
                                <div class="entry-time">
                                    <span class="day">09</span>
                                    <span class="month">Aug</span>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <div class="entry-meta clearfix">
                                    <span class="meta author">by <a href="#">steelthemes</a></span>
                                    <span class="meta cat-links"><a href="#">Manufacturing</a>, <a
                                            href="#">Warehousing</a></span>
                                </div>
                                <h2 class="entry-title"><a href="#">Delivering logistic services</a></h2>
                                <div class="entry-footer">
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--news ends -->

        <!--footer sec-->
        <div class="footer-widgets widgets-area">
            <div class="contact-widget">
                <div class="container">
                    <div class="row">
                        <div class="contact col-md-3 col-xs-12 col-sm-12">
                            <a href="#" class="footer-logo"><img src="{{ asset('frontend/images/logo-light.png') }}"
                                    alt="Footer Logo"></a>
                        </div>
                        <div class="contact col-md-3 col-xs-12 col-sm-12"><i class="flaticon-signs"></i>
                            <p>Address : Cargo Hub,</p>
                            <h4>NEWYORK 10012, USA</h4>
                        </div>
                        <div class="contact col-md-3 col-xs-12 col-sm-12"><i class="flaticon-phone-call "></i>
                            <p>Toll Free Number :</p>
                            <h4>+44 567 890123 – 30</h4>
                        </div>
                        <div class="contact col-md-3 col-xs-12 col-sm-12"><i class="flaticon-clock-1"></i>
                            <p>Opening Hours :</p>
                            <h4>MON – FRI: 8AM – 5PM</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-sidebars">
                <div class="container">
                    <div class="row">
                        <div class="footer-sidebar footer-1 col-xs-12 col-sm-6 col-md-3">
                            <div class="widget widget_text">
                                <h4 class="widget-title">About Cargo</h4>
                                <div class="textwidget">
                                    <p>Cargo HUB Logistics Services is a global supplier of transport and logistics
                                        solutions. We have offices in more than 20 countries and an international
                                        network of partners and agents.</p>
                                </div>
                            </div>
                            <div class="widget cargohub-social-links-widget">
                                <div class="list-social style-1">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-sidebar footer-2 col-xs-12 col-sm-6 col-md-3">
                            <div class="widget widget_nav_menu">
                                <h4 class="widget-title">Useful Links</h4>
                                <div class="menu-service-menu-container">
                                    <ul class="menu">
                                        <li><a href="#">All Services</a></li>
                                        <li><a href="#">Ground Transport</a></li>
                                        <li><a href="#">Cargo Service</a></li>
                                        <li><a href="#">Warehousing</a></li>
                                        <li><a href="#">Road Freight Forwarding</a></li>
                                        <li><a href="#">Ocean Freight Forwarding</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-sidebar footer-3 col-xs-12 col-sm-6 col-md-3">
                            <div class="widget latest-project-widget">
                                <h4 class="widget-title">Photo gallery</h4>
                                <div class="latest-project-list clearfix">
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ asset('frontend/images/projects/fg1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ asset('frontend/images/projects/fg2.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ asset('frontend/images/projects/fg3.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ asset('frontend/images/projects/fg4.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ asset('frontend/images/projects/fg5.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-project clearfix">
                                        <div class="fp-widget-thumb">
                                            <a class="widget-thumb" href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                <img src="{{ asset('frontend/images/projects/fg6.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-sidebar footer-4 col-xs-12 col-sm-6 col-md-3">
                            <div class="widget widget_mc4wp_form_widget">
                                <h4 class="widget-title">Our Newsletter</h4>
                                <form>
                                    <div class="footform">
                                        <div class="fh-form-field">
                                            <p>
                                                Sign up today for tips and latest news and exclusive special offers.
                                            </p>
                                            <div class="subscribe">
                                                <input name="EMAIL" placeholder="Enter Your Email"
                                                    required="" type="email">
                                                <input value="Sign Up" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- / MailChimp for WordPress Plugin -->
                            </div>
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <p>We don’t do spam and Your mail id very confidential.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer sec end-->

        <!--copyright sec-->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="footer-copyright col-md-6 col-sm-12 col-sx-12">
                        <div class="site-info">Copyright @ 2017 <a href="#">Steelthemes</a>, All Right
                            Reserved </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-right footer-text"><a href="#">Purchase
                            Now</a> </div>
                </div>
            </div>
        </footer>
        <!--copyright sec end-->
    </div>
    <!--End pagewrapper-->

    <!--primary-mobile-nav-->
    <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
        <a href="#" class="close-canvas-mobile-panel">×</a>
        <ul class="menu">
            <li class="current-menu-item menu-item-has-children"><a href="index-2.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index-2.html">Home Page 1</a></li>
                    <li><a href="home-page-2.html">Home Page 2</a></li>
                    <li><a href="home-page-3.html">Home Page 3</a></li>
                    <li><a href="home-page-4.html">Home Page 4</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="services.html" class="dropdown-toggle">Services</a>
                <ul class="sub-menu">
                    <li><a href="services.html">All Services</a></li>
                    <li><a href="road-freight-forwarding.html">Road Freight Forwarding</a></li>
                    <li><a href="ocean-freight-forwarding.html">Ocean Freight Forwarding</a></li>
                    <li><a href="air-freight-forwarding.html">Air Freight Forwarding</a></li>
                    <li><a href="warehousing.html">Warehousing</a></li>
                    <li><a href="door-to-door-delivery.html">Door to Door Delivery</a></li>
                    <li><a href="ground-transport.html">Ground Transport</a></li>
                    <li><a href="worldwide-transport.html">Worldwide Transport</a></li>
                    <li><a href="cargo-service.html">Cargo Service</a></li>
                    <li><a href="packaging-storage.html">Packaging &#038; Storage</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="projects.html" class="dropdown-toggle">Pages</a>
                <ul class="sub-menu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="faqs.html">FAQS</a></li>
                    <li><a href="our-prices.html">Our Prices</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="gallery.html" class="dropdown-toggle">Gallery</a>
                <ul class="sub-menu">
                    <li><a href="gallery-column-4.html">Gallery Four Columns</a></li>
                    <li><a href="gallery-column-3.html">Gallery Three Columns</a></li>
                    <li><a href="gallery.html">Gallery Two Columns</a></li>
                    <li><a href="gallery-single.html">Gallery Single</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#" class="dropdown-toggle">Features</a>
                <ul class="sub-menu">
                    <li><a href="request-a-quote.html">Request A Quote</a></li>
                    <li><a href="track-your-shipment.html">Track Your Shipment</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="blog.html" class="dropdown-toggle">News</a>
                <ul class="sub-menu">
                    <li><a href="blog-column-2.html">Blog Two Columns</a></li>
                    <li><a href="blog-column-3.html">Blog Three Columns</a></li>
                    <li><a href="blog-column-4.html">Blog Four Columns</a></li>
                    <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                    <li><a href="blog-single.html">Blog Single Post</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li class="extra-menu-item menu-item-button-link">
                <a href="request-a-quote.html" class="fh-btn btn">Get A Quote</a>
            </li>
        </ul>

    </div>
    <div id="off-canvas-layer" class="off-canvas-layer"></div>
    <!--primary-mobile-nav end-->

    <!--Scroll to top-->
    <a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>

    <!--Color switcher-->
    {{-- <div class="demo_changer" id="demo_changer">
        <div class="demo-icon fa fa-sliders"></div>
        <div class="form_holder">
            <h3 class="demo-title">Customize CargoHub</h3>

            <div class="line"></div>
            <p>Color Scheme</p>
            <div class="predefined_styles" id="styleswitch_area">
                <a href="indexc392.html?default=true" data-rel="default" class="styleswitch"
                    style="background:#ff0000;border-right-color: #0c1239;border-bottom-color: #0c1239"></a>
                <a href="#" data-rel="navy-darkblue" class="styleswitch"
                    style="background:#00baff;border-right-color: #0c1239;border-bottom-color: #0c1239"></a>
                <a href="#" data-rel="orange-black" class="styleswitch"
                    style="background:#ee6012;border-right-color: #202020;border-bottom-color: #202020"></a>
                <a href="#" data-rel="yellow-blue" class="styleswitch"
                    style="background:#f6a604;border-right-color: #0032ab;border-bottom-color: #0032ab"></a>
            </div>
            <div class="line"></div>
        </div>
    </div> --}}

    <!-- jquery Liabrary -->
    <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('frontend/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox-media.js') }}"></script>
    <script src="../../../unpkg.com/isotope-layout%403.0.6/dist/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <!-- counter js -->
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <!-- validate js -->
    <script src="{{ asset('frontend/js/validate.js') }}"></script>
    <!-- switcher js -->
    <script src="{{ asset('frontend/js/switcher.js') }}"></script>

    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <script src="{{ asset('frontend/js/gmap.js') }}"></script>
    <script src="{{ asset('frontend/js/map-helper.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- script JS  -->
    <script src="{{ asset('frontend/js/scripts.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>


<!-- Mirrored from st.ourhtmldemo.com/template/cargohub/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 14:01:03 GMT -->

</html>
