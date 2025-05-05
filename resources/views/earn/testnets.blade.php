{{-- @extends('/earn')

@section('content')
<div class="jobs-section">
    <h2>Web3 Jobs</h2>
    <div class="job-list">
        @foreach($testnets as $testnets)
        <div class="job-card">
            <img src="{{ asset('images/' . $job->image) }}" alt="testnets Image">
            <h3>{{ $testnets->title }}</h3>
            <p>{{ $testnets->description }}</p>
            <button>Perticipate</button>
        </div>ma
        @endforeach
    </div>
</div>
@endsection --}}

<div class="jobs-section">
    <h2>Web3 Jobs</h2>
    <div class="job-list">
        @foreach($jobs as $job)
        <div class="job-card">
            <img src="{{ asset('images/' . $job->image) }}" alt="Job Image">
            <h3>{{ $job->title }}</h3>
            <p>{{ $job->description }}</p>
            <button>Apply</button>
        </div>
        @endforeach
    </div>
</div>
