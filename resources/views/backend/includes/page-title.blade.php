<!-- Page Title Start -->
<div class="flex justify-between items-center mb-6">
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">{{ $title }}</h4>
    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
        @isset($sub_title)
            <div class="flex items-center gap-2">
                <a href="{{ $sub_url ?? route('backend.index') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400">{{ $sub_title }}</a>
            </div>
        @endisset
        <div class="flex items-center gap-2">
            @isset($sub_title)
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
            @endisset
            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">{{ $title }}</a>
        </div>
    </div>
</div>
<!-- Page Title End -->
