<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inspection</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inspections.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Enterprise:</strong>
                            {{ $inspection->enterprise }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $inspection->description }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $inspection->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
