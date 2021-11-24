@extends('community.BookmarkMaster')
@section('content')
<div class="container-fluid main-container dashboard">
    <div id="wrapper" class="">
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">
                <li class="sidebar-section-title">
                    <p class="text-uppercase">Visibility</p>
                <li>
                    <a class="visibility-filter all-bookmarks selected" href="#">
                        <i class="fa fa-file-text-o"></i>
                        <span class="filter-name">All</span>

                    </a>
                </li>
                <li>
                    <a class="visibility-filter public-bookmarks" href="#">
                        <i class="fa fa-file-text-o"></i>
                        <span class="filter-name">Public</span>

                    </a>
                </li>
                <li>
                    <a class="visibility-filter my-bookmarks" href="#">
                        <i class="fa fa-file-text-o"></i>
                        <span class="filter-name">Private</span>

                    </a>
                </li>
            </ul>

        </div>

    </div>
</div>
<!-- @include('layouts.new-bookmark') -->
<!-- @include('layouts.update-bookmark') -->
@endsection