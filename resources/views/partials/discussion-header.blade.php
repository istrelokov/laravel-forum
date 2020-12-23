<div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                    <strong class="ml-2">{{ $discussion->user->name }}</strong>

                    </div>
                    <div>
                        <a href="{{ route('discussions.show', $discussion->slug) }}" class="btn btn-success btn-sm">View Discussion</a>
                    </div>
                </div>
            </div>