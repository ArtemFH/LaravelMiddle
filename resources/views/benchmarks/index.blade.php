@section('body')
    <div class="list-group">
        @foreach($benchmarkCpus as $benchmarkCpu)
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                </div>
                {{ dd($benchmarkCpu) }}
                <p class="mb-1">{{ $benchmarkCpu->score }}</p>
                <small class="text-muted">{{ $benchmarkCpu->user->username }}</small>
            </a>
        @endforeach
    </div>
@endsection
