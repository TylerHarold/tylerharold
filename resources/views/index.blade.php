@extends("layouts.master")

@section("body")
    @foreach($work as $job)
        <div class="col-md-12">
            @if($job->company_site != null)
                <b>
                    <a href="{{ $job->company_site }}"><h1>{{ $job->company_name }}</h1>
                        <span style="color: royalblue">| {{ $job->company_title }}</span>
                    </a>
                </b>
            @else
                <h1>{{ $job->company_name }}</h1>
            @endif
            <h2>{{ $job->company_timeframe }}</h2>
            <p>{{ $job->company_description }}</p>
            <br>
        </div>
    @endforeach
@endsection
