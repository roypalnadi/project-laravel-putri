<!-- resources/views/components/content.blade.php -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrumbs as $breadcrumb)
                        <li class="breadcrumb-item">
                            <a href="{{ $breadcrumb['link'] }}">{{ $breadcrumb['name'] }}</a>
                        </li>
                    @endforeach
                    <li class="breadcrumb-item active">{{ end($breadcrumbs)['name'] }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>