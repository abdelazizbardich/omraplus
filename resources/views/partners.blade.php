<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{ __('index.Search') }}...">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="sortable">{{ __('index.full name') }}</th>
                                <th class="sortable">{{ __('index.Company name') }}</th>
                                <th class="sortable">{{ __('index.email') }}</th>
                                <th class="sortable">{{ __('index.phone') }}</th>
                                <th class="sortable">{{ __('index.status') }}</th>
                                <th class="sortable">{{ __('index.Referral code') }}</th>
                                <th class="sortable">{{ __('index.Commission rate') }} %</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                    <td class="font-bold">{{ $partner->name }}</td>
                                    <td>{{ $partner->company_name ?? '—' }}</td>
                                    <td>{{ $partner->email }}</td>
                                    <td>{{ $partner->phone }}</td>
                                    <td>
                                        <span class="badge text-xs p-3 {{ getStatusBg($partner->status) }}">
                                            {{ __('index.' . $partner->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if ($partner->referral_code)
                                            <span class="badge badge-outline font-mono">{{ $partner->referral_code }}</span>
                                        @else
                                            —
                                        @endif
                                    </td>
                                    <td>{{ $partner->commission_rate }}%</td>
                                    <th class="flex gap-1">
                                        <a href="{{ route('partners.show', $partner->id) }}" class="btn btn-xs btn-info edit"></a>
                                        @if ($partner->status === 'pending')
                                            <a href="{{ route('partners.approve', $partner->id) }}" class="btn btn-xs btn-success" title="{{ __('index.Approve') }}">✓</a>
                                            <a href="{{ route('partners.reject', $partner->id) }}" class="btn btn-xs btn-error" title="{{ __('index.Reject') }}">✗</a>
                                        @endif
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
