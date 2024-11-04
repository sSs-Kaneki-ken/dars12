@extends('layouts.main')

@section('title', 'Университет')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Simple Tables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Университет</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>UNIVERSITET</th>
                                        <th>FACULTETS</th>
                                        <th>LEANINGS</th>
                                        <th>GROUPS</th>
                                        <th>STUDENTS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        @foreach ($universitets as $universitet)
                                        <tr>
                                            <td>{{$universitet->id}}</td>
                                            <td>{{$universitet->name}}</td>
                                            <td>{{$universitet->facultets->count()}}</td>
                                            <td>
                                                {{ $universitet->facultets->sum(fn($facultet) => $facultet->leanings->count()) }}
                                            </td>
                                            <td>
                                                {{ $universitet->facultets->sum(fn($facultet) => 
                                                    $facultet->leanings->sum(fn($leaning) => $leaning->groups->count() ) ) }}
                                            </td>
                                            <td>
                                                {{ $universitet->facultets->sum(fn($facultet) => 
                                                    $facultet->leanings->sum(fn($leaning) => $leaning->groups->sum(fn($group) => 
                                                    $group->students->count() ) ) ) }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection