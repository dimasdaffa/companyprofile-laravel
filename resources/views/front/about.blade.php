@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            {{-- reusable navbar --}}
            <x-navbar />
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">About Us</p>
                </div>
                <h1 class=" text-2xl leading-[45px] text-center">Bran Apparel merupakan perusahaan konveksi ternama di Indonesia yang melayani pembuatan produk Apparel custom seperti kaos, Jersey, kemeja, polo serta produk Apparel dan Merchandise lainnya yang menggunakan bahan terbaik sehingga menghasilkan produk yang berkualitas.<br/> Dengan harga yang irit, kami melayani pembuatan produk yang memiliki kualitas Wahid. Pelayanan optimal dan kualitas produk terbaik menjadi komitmen utama kami dalam mewujudkan #PastiPAS #PastiPUAS #SemuaBergaransi.
                </h1>
            </div>
        </div>
    </div>
    <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">

        @forelse ($abouts as $about)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                    <img src="{{Storage::url($about->thumbnail)}}" class="w-full h-full object-contain"
                        alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                    <p
                        class="badge w-fit bg-cp-pale-blue text-cp-light-red p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        OUR {{$about->type}}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{ $about->name }}</h2>
                        <div class="flex flex-col gap-5">

                            @forelse ($about->keypoints as $keypoint)
                                <div class="flex items-center gap-[10px]">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="assets/icons/tick-circle.svg" alt="icon">
                                    </div>
                                    <p class="leading-[26px] font-semibold">{{$about->keypoint}}</p>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse

    </div>
    <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
        <h2 class="font-bold text-lg">Partner Langganan Kami</h2>
        <div class="logo-container flex flex-wrap gap-5 justify-center">
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id="Stats" class="bg-cp-darker-red w-full mt-20">
        <div class="container max-w-[1000px] mx-auto py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">
                @forelse ($statistics as $statistic)
                    <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{ Storage::url($statistic->icon) }}" class="object-contain w-full h-full"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->name }}</p>
                    </div>
                @empty
                    <p>belum ada data</p>
                @endforelse

            </div>
        </div>
    </div>
    </div>
    <div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-red p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    GALLERY</p>
                <h2 class="font-bold text-4xl leading-[45px]">Lihat lebih dekat bagaimana kami<br>menghadirkan baju custom berkualitas!</h2>
            </div>
            <a href="" class="bg-cp-darker-red p-[14px_20px] w-fit rounded-xl font-bold text-white">Selengkapnya</a>
        </div>
        <div class="awards-card-container grid grid-cols-4 gap-[30px] justify-center">
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-red.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Proses Produksi</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Setiap baju dibuat dengan ketelitian dan bahan berkualitas untuk hasil terbaik.</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-red.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Proses Desain</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Dari ide ke realitas! Kami wujudkan desain custom yang sesuai dengan Anda.</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-red.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Proses Packing</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Dikemas dengan rapi dan aman, memastikan pesanan Anda sampai dalam kondisi sempurna.</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="assets/icons/cup-red.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Proses Quality Control</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Kami cek setiap detail agar hanya produk terbaik yang Anda terima!</p>
            </div>
        </div>
    </div>
    <footer class="bg-cp-darker-red w-full relative overflow-hidden mt-20">
        <div
            class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex shrink-0 h-[43px] overflow-hidden">
                        <img src="assets/logo/logo.svg" class="object-contain w-full h-full" alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">BranApparel</p>
                        <p id="CompanyTagline" class="text-sm text-cp-light-grey">From Us to All Around The Worlds</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="https://wa.me/+6285162808272?text=Halo%20Admin%2C%20Saya%20ingin%20memesan%20produk%20di%20Bran%20Apparel">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/whatsapp.svg" class="w-full h-full object-contain" alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/facebook.svg" class="w-full h-full object-contain" alt="facebook">
                        </div>
                    </a>
                    <a href="https://www.instagram.com/branapparell?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                        <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                            <img src="assets/icons/instagram.svg" class="w-full h-full object-contain" alt="instagram">
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-[50px]">
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Products</p>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">General
                        Contract</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Building
                        Assessment</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">3D Paper
                        Builder</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Legal
                        Constructions</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">About</p>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">We’re
                        Hiring</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Our Big
                        Purposes</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Investor
                        Relations</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Media
                        Press</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="font-bold text-lg text-white">Useful Links</p>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Privacy &
                        Policy</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Terms &
                        Conditions</a>
                    <a href="contact.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Hubungi
                        Kami</a>
                    <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">
                </div>
            </div>
        </div>
        <div class="absolute -bottom-[135px] w-full">
            <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">BranApparel</p>
        </div>
    </footer>
@endsection
