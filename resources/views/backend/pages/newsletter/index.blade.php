@extends('backend.layouts.vertical', [
    'title' => 'Newsletter', 
    'sub_title' => 'Menu',
    'mode' => $mode ?? '',
    'demo' => $demo ?? ''
    ])

@section('content')
<div class="mt-6">
	<div class="card">
        @can('newsletter.create')
		<div class="flex flex-wrap justify-between items-center gap-2 p-6">
			<a href="{{ route('backend.newsletter.create') }}" class="btn bg-primary/20 text-sm font-medium text-primary hover:text-white hover:bg-primary">
				<i class="mgc_add_circle_line me-3"></i>
				{{ __('Newsletter') }}
            </a>
		</div>
        @endcan
		<div class="relative overflow-x-auto">
			<table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
				<thead class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
					<tr>
						<th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
							ID
						</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
							{{ __('Subject') }}
						</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
							{{ __('To be sent from date') }}
						</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
							{{ __('Created at') }}
						</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
							{{ __('Updated at') }}
						</th>
						<th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-200">
							{{ __('Action') }}
						</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
					@foreach ($newsletters as $newsletter)
						<tr>
							<td class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
								<b>#{{ $newsletter->id }}</b>
							</td>
							<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
								{{ $newsletter->subject }}
							</td>
							<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
								{{ $newsletter->start_sending_at }}
							</td>
							<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
								{{ $newsletter->created_at }}
							</td>
							<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
								{{ $newsletter->updated_at }}
							</td>
							<td class="whitespace-nowrap py-4 px-3 text-center text-sm font-medium">
								<a href="javascript:void(0);" class="me-0.5">
									<i class="mgc_edit_line text-lg"></i>
								</a>
								<a href="javascript:void(0);" class="ms-0.5">
									<i class="mgc_delete_line text-xl"></i>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
