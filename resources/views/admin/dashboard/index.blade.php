@extends('admin.layouts.layout')
@section('page_title', 'Dashboard')
@section('content')
<div class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold text-primary mb-6">Dashboard</h2>
    <!-- Statistik Cards -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-8">
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <i class="fas fa-seedling text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\Produk::count() }}</div>
            <div class="text-xs text-gray-500">Produk</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <i class="fas fa-newspaper text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\Blog::count() }}</div>
            <div class="text-xs text-gray-500">Artikel</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <i class="fas fa-images text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\Galeri::count() }}</div>
            <div class="text-xs text-gray-500">Galeri</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <i class="fas fa-image text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\Banner::count() }}</div>
            <div class="text-xs text-gray-500">Banner</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <i class="fas fa-comment-alt text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\Testimoni::count() }}</div>
            <div class="text-xs text-gray-500">Testimoni</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center">
            <i class="fas fa-envelope text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\Pesan::count() }}</div>
            <div class="text-xs text-gray-500">Pesan Masuk</div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 flex flex-col items-center col-span-2 md:col-span-3 lg:col-span-6">
            <i class="fas fa-users-cog text-2xl text-primary mb-2"></i>
            <div class="text-lg font-bold">{{ \App\Models\User::count() }}</div>
            <div class="text-xs text-gray-500">User</div>
        </div>
    </div>
    <!-- Grafik Dummy -->
    <div class="bg-white rounded-xl shadow p-6 mb-8">
        <h3 class="text-lg font-semibold text-primary mb-4">Statistik Aktivitas (Dummy)</h3>
        <img src="https://quickchart.io/chart?c={type:'bar',data:{labels:['Jan','Feb','Mar','Apr','Mei','Jun'],datasets:[{label:'Aktivitas',data:[12,19,3,5,2,3],backgroundColor:'#4caf50'}]}}" alt="Grafik Dummy" class="w-full max-w-xl mx-auto">
    </div>
    <!-- Aktivitas Terbaru Dummy -->
    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-lg font-semibold text-primary mb-4">Aktivitas Terbaru</h3>
        <ul class="divide-y divide-gray-200">
            <li class="py-2 flex items-center gap-2"><i class="fas fa-plus-circle text-green-500"></i> Admin menambah produk baru <span class="ml-auto text-xs text-gray-400">2 menit lalu</span></li>
            <li class="py-2 flex items-center gap-2"><i class="fas fa-edit text-yellow-500"></i> Artikel "Tips Bertani" diupdate <span class="ml-auto text-xs text-gray-400">10 menit lalu</span></li>
            <li class="py-2 flex items-center gap-2"><i class="fas fa-user-plus text-blue-500"></i> User baru didaftarkan <span class="ml-auto text-xs text-gray-400">1 jam lalu</span></li>
            <li class="py-2 flex items-center gap-2"><i class="fas fa-envelope text-primary"></i> Pesan masuk dari pelanggan <span class="ml-auto text-xs text-gray-400">Hari ini</span></li>
        </ul>
    </div>
</div>
@endsection


