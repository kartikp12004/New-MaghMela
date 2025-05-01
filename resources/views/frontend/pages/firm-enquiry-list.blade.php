@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto my-12">
  <h2 class="text-2xl font-semibold mb-4">All Firm Enquiries</h2>

  <table class="w-full table-auto border-collapse">
    <thead class="bg-gray-100">
      <tr>
        <th class="border p-2">ID</th>
        <th class="border p-2">Firm Name</th>
        <th class="border p-2">Website</th>
        <th class="border p-2">Address</th>
        <th class="border p-2">Message</th>
        <th class="border p-2">Submitted At</th>
      </tr>
    </thead>
    <tbody>
      @forelse($all as $item)
        <tr class="hover:bg-gray-50">
          <td class="border p-2">{{ $item->id }}</td>
          <td class="border p-2">{{ $item->firm_name }}</td>
          <td class="border p-2">
            @if($item->website)
              <a href="{{ $item->website }}" target="_blank" class="text-blue-600 hover:underline">
                {{ Str::limit($item->website, 30) }}
              </a>
            @endif
          </td>
          <td class="border p-2">{{ $item->address }}</td>
          <td class="border p-2">{{ $item->message }}</td>
          <td class="border p-2 text-sm text-gray-600">{{ $item->created_at->format('Y-m-d H:i') }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="6" class="text-center p-4">No enquiries found.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <div class="mt-4">
    {{ $all->links() }}
  </div>
</div>
@endsection
