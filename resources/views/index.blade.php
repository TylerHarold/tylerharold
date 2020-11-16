@extends("layouts.master")

@section("body")
    <div class="container">
        <div class="row justify-content-center">
            @foreach($work as $job)
                <div class="col-md-6 col-sm-12">
                    @if($job->company_site != null)
                        <a href="{{ $job->company_site }}"><h1>{{ $job->company_name }}</h1></a>
                    @else
                        <h1>{{ $job->company_name }}</h1>
                    @endif
                    <h2>{{ $job->company_timeframe }}</h2>
                    <p>{{ $job->company_description }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
