<table class="table table-hover align-middle">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Control</th>
        <th>Created_At</th>
    </tr>
    </thead>
    <tbody>

    @forelse($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->title }}</td>
            <td>

                <div class="btn btn-group">

                    <a href="{{ route('category.edit',$brand->id) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-pencil-alt fa-fw"></i>
                    </a>
                    <button class="btn btn-outline-primary btn-sm" form="del{{ $brand->id }}">
                        <i class="fas fa-trash-alt fa-fw"></i>
                    </button>
                </div>

                <form action="{{ route('category.destroy',$brand->id) }}" class="d-none" id="del{{ $brand->id }}" method="post">
                    @csrf
                    @method('delete')

                </form>

            </td>
            <td>
                <p class="mb-0 small">
                    <i class="fas fa-calendar fa-fw"></i> {{ $brand->created_at->format('d / m / Y') }}
                </p>
                <p class="mb-0 small">
                    <i class="fas fa-clock fa-fw"></i>
                    {{ $brand->created_at->format("h:i a") }}
                </p>


            </td>
        </tr>

    @empty
        <tr>
            <td colspan="5">There is no Category</td>
        </tr>
    @endforelse

    </tbody>
</table>


