{{-- ini ngelist student yang nge apply ke project kalau masih available --}}
{{-- disini nge include modal.accept & modal.delete  --}}

{{-- kalau udah ongoing ngelist student yang udah accepted di dalemnya tanpa kolom application status --}}

{{-- kalo bukan user yang login yang punya projectnya, hide semua actionnya  --}}
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-user mr-2"></i>Student List</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="border-0" width="25px">NIM</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">Department</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Application Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($project->works as $user)
                        <tr>
                            <td><a href="{{ route('supervisor.user.show', $user->id) }}"
                                   class="text-primary font-weight-bold">{{ $user->detailable->nim }}</a></td>
                            <td class="font-weight-bold proj-name">
                                <a
                                    href="{{ route('supervisor.user.show', $user->id) }}">
                                    {{ $user->detailable->name }}</a>
                            </td>
                            <td>{{ $user->detailable->department->initial }}</td>
                            @if($user->pivot->status == 0)
                                <td class="text-warning">
                                    <span class="fas fa-clock"></span>
                                    <span class="font-weight-bold">Pending</span>
                                </td>
                            @endif
                            @if($user->pivot->status == 1)
                                <td class="text-success">
                                    <span class="fas fa-check"></span>
                                    <span class="font-weight-bold">Accepted</span>
                                </td>
                            @endif
                            @if($user->pivot->status == 2)
                                <td class="text-danger">
                                    <span class="fas fa-times"></span>
                                    <span class="font-weight-bold">Declined</span>
                                </td>
                            @endif
                            <td class="align-middle">
                                @include('supervisor.project.modal.accept')
                                @include('supervisor.project.modal.decline')
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                                    <div>
                                        <a class="btn btn-success text-white mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-accept-{{$user->id}}">
                                            <span class="fa fa-check"></span>
                                        </a>
                                        <a class="btn btn-danger text-white mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-decline-{{$user->id}}">
                                            <span class="fa fa-times"></span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
