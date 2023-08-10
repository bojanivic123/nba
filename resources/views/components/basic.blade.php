<div class="col">
    <div class="card shadow-sm">
      <div class="card-body">
        <p class="card-text">{{ $team->name }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/teams/{{ $team->id }}" class="btn btn-sm btn-outline-secondary">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  