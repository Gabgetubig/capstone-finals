<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

        <div class="pagetitle">
        <h1 style="font-family: Zen Dots; colorblack;">Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card info-card sales-card">
                                <div class="card-body p-3 pt-2">
                                    <h5 class="card-title">Capstone Projects</h5>

                                    <div class="d-flex align-items-center">
                                            </div>
                                            <div class="ps-5">
                                                <h6>0</h6>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card info-card sales-card">
                                <div class="card-body p-3 pt-2">
                                    <h5 class="card-title">Student Access</h5>

                                    <div class="d-flex align-items-center">
                                            </div>
                                            <div class="ps-5">
                                                <h6>0</h6>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-2">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Project Pending Approval</h5>

                                    <div class="d-flex align-items-center">
                                            </div>
                                            <div class="ps-5">
                                                <h6>0</h6>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-2">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Uploaded Projects</h5>

                                    <div class="d-flex align-items-center">
                                            </div>
                                            <div class="ps-5">
                                                <h6>0</h6>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>