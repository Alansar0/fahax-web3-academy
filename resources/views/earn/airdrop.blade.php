{{-- @extends('/earn')

@section('content')
<div class="jobs-section">
    <h2>Mining Opportunities</h2>
    <div class="job-list">
        @foreach($airdrops as $airdrops)
        <div class="job-card">
            <img src="{{ asset('images/' . $airdrops->image) }}" alt="airdrops Image">
            <h3>{{ $airdrops->title }}</h3>
            <p>{{ $airdrops->description }}</p>
            <button>Perticipate Airdrops</button>
        </div>
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
