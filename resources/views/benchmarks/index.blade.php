@section('body')
    <div class="container">
        <div class="list-group mt-3">
            <a href="#" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                <p class="mb-1">Nomination: CPU</p>
            </a>
            @foreach($benchmarkCPUs as $indexCPU)
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                    </div>
                    <p class="mb-1">Score: {{ $indexCPU->score }}</p>
                    <small class="text-muted">Enthusiast: {{ $indexCPU->user->username }}</small>
                </a>
            @endforeach
        </div>
        <div class="list-group mt-3">
            <a href="#" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                <p class="mb-1">Nomination: GPU</p>
            </a>
            @foreach($benchmarkGPUs as $indexGPU)
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                    </div>
                    <p class="mb-1">Score: {{ $indexGPU->score }}</p>
                    <small class="text-muted">Enthusiast: {{ $indexGPU->user->username }}</small>
                </a>
            @endforeach
        </div>
        <div class="list-group mt-3">
            <a href="#" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                <p class="mb-1">Nomination: RAM</p>
            </a>
            @foreach($benchmarkRAMs as $indexRAM)
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Place: {{ $loop->iteration }}</h5>
                    </div>
                    <p class="mb-1">Score: {{ $indexRAM->score }}</p>
                    <small class="text-muted">Enthusiast: {{ $indexRAM->user->username }}</small>
                </a>
            @endforeach
        </div>
    </div>
@endsection
