@extends('layouts.workforce')

@section('title', $title)

@section('shell')
<div class="flex h-screen overflow-hidden">
  <aside id="sidebar" class="w-[232px] flex-none bg-navy flex flex-col h-screen overflow-hidden"></aside>
  <div class="flex-1 flex flex-col min-w-0">
    <header id="topbar" class="flex-none bg-white border-b border-slate-100 px-5 py-3 flex items-center gap-4 z-30"></header>
    <main id="app" class="flex-1 overflow-y-auto p-5"></main>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset("js/{$name}.js") }}"></script>
@endsection
