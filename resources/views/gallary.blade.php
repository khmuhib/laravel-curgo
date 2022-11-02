@include('frontend.header')

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Gallery</h1> </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                            <nav class="breadcrumb">
                                <a class="home" href="#"><span>Home</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span>Gallery</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--faq pagesec-->
        <section class="gallerypagesec secpadd">
            <div class="container">
                <div class="row">
                    <div class="all-project col-sm-12">
                        {{-- <div class="filters-dropdown">
                            <ul class="filter">
                                <li class="list active" data-filter="all">View All</li>
                                <li class="list" data-filter=".data01">Freight Forwarding</li>
                                <li class="list" data-filter=".data02">Transport</li>
                                <li class="list" data-filter=".data03">Materials</li>
                                <li class="list" data-filter=".data04">Shipment</li>
                                <li class="list" data-filter=".data05">Cargo</li>
                            </ul>
                        </div> --}}
                        <div class="row">
                            <h1>Gallery One</h1>
                            <div class="list-project">
                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/1.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/1.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/2.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/2.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data02 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/3.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/3.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data03 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/4.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/4.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data04 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/5.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/5.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/6.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/6.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data03 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/7.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/7.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data05 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/8.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/8.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                            </div>
                            {{-- <nav class="navigation paging-navigation numeric-navigation">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </nav> --}}
                        </div>
                        <div class="row">
                            <h1>Gallery One</h1>
                            <div class="list-project">
                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/1.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/1.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/2.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/2.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data02 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/3.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/3.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data03 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/4.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/4.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data04 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/5.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/5.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/6.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/6.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data03 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/7.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/7.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data05 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/8.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/8.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                            </div>
                            {{-- <nav class="navigation paging-navigation numeric-navigation">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </nav> --}}
                        </div>
                        <div class="row">
                            <h1>Gallery One</h1>
                            <div class="list-project">
                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/1.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/1.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/2.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/2.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data02 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/3.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/3.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data03 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/4.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/4.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data04 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/5.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/5.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data01 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/6.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/6.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data03 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/7.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/7.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                                <div class="project-wrapper col-xs-12 col-sm-6 col-md-3   data05 itemBox">
                                    <div class="project-thumbnail">
                                        <a href="#" class="pro-link"></a>
                                        <a href="#"><img src="{{ asset('frontend/images/projects/8.jpg') }}" alt=""></a>
                                        <div class="project-button">
                                            <a href="{{ asset('frontend/images/projects/8.jpg') }}" data-fancybox="gallery" class="button-link fancybox"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="button-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- #project-## -->

                            </div>
                            {{-- <nav class="navigation paging-navigation numeric-navigation">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </nav> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--faqpagesec end-->




@include('frontend.footer')