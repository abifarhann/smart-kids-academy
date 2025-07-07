<!-- ===== Sidebar Start ===== -->
<aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
    class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r bg-white border-gray-200 px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0">
    <!-- SIDEBAR HEADER -->
    <div class="flex flex-col gap-[-100px] pt-4 pb-7 sidebar-header"
        :class="sidebarToggle ? 'items-center' : 'items-start'">
        <!-- Baris atas: logo, teks, dan ikon -->
        <div class="flex items-center justify-start w-full" :class="sidebarToggle ? 'justify-start' : 'justify-start'">
            <!-- Logo besar -->
            <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
                <img src="images/logo/logo-unfix.png" alt="Logo" style="width: 50px; height: 50px;" />
            </span>

            <!-- Judul Akademi -->
            <h3 class="text-lg font-semibold  dark:text-white" :class="sidebarToggle ? 'hidden' : ''"
                style="color: #004276">
                Smart Kids Academy
            </h3>
        </div>
    </div>

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <!-- Sidebar Menu -->
        <nav x-data="{
            selected: $persist('Dashboard'),
            currentPage: '{{ request()->route()->getName() }}' // Get current route name
        }">
            <!-- Menu Group -->
            <div>

                @if (Auth::check() && Auth::user()->role === 'admin')
                    {{-- admin --}}
                    <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
                        <span class="menu-group-title" :class="sidebarToggle ? 'lg:hidden' : ''">
                            MENU DASHBOARD ADMIN
                        </span>

                        <svg :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
                            class="mx-auto fill-current menu-group-icon" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
                                fill="" />
                        </svg>
                    </h3>
                @endif


                @if (Auth::check() && Auth::user()->role === 'wali_murid')
                    {{-- wali --}}
                    <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
                        <span class="menu-group-title" :class="sidebarToggle ? 'lg:hidden' : ''">
                            MENU DASHBOARD WALI SISWA
                        </span>

                        <svg :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
                            class="mx-auto fill-current menu-group-icon" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
                                fill="" />
                        </svg>
                    </h3>
                @endif

                <ul class="flex flex-col gap-4 mb-6">

                    {{-- admin --}}
                    <!-- Menu Item Dashboard -->
                    @if (Auth::check() && Auth::user()->role === 'admin')
                        <li>
                            <a href="#" @click.prevent="selected = (selected === 'dashboard' ? '' : 'dashboard')"
                                class="menu-item group"
                                :class="(selected === 'dashboard' || currentPage === 'statistik') ? 'menu-item-active' :
                                'menu-item-inactive'">

                                <svg :class="(selected === 'dashboard' || currentPage === 'statistik') ? 'menu-item-icon-active' :
                                'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z"
                                        fill="currentColor" />
                                </svg>

                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Dashboard
                                </span>

                                <svg class="menu-item-arrow"
                                    :class="[
                                        (selected === 'dashboard' || currentPage === 'statistik') ?
                                        'menu-item-arrow-active' : 'menu-item-arrow-inactive',
                                        sidebarToggle ? 'lg:hidden' : ''
                                    ]"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="overflow-hidden transform translate"
                                :class="(selected === 'dashboard' || currentPage === 'statistik') ? 'block' : 'hidden'"
                                x-init="if (currentPage === 'statistik') { selected = 'dashboard' }">
                                <ul
                                    :class="[sidebarToggle ? 'lg:hidden' : '', 'flex flex-col gap-1 mt-2 menu-dropdown pl-9']">
                                    <li>
                                        <a href="{{ route('statistik') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'statistik' ? 'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Statistik
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                        <!-- Menu Item Dashboard -->

                        <!-- Menu Item Profile -->
                        <li>
                            <a href="{{ route('akun-wali-siswa') }}" class="menu-item group" 
                                :class="currentPage === 'akun-wali-siswa' ? 'menu-item-active' : 'menu-item-inactive'">
                                <svg :class="currentPage === 'akun-wali-siswa' ? 'menu-item-icon-active' : 'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 14.1526 4.3002 16.1184 5.61936 17.616C6.17279 15.3096 8.24852 13.5955 10.7246 13.5955H13.2746C15.7509 13.5955 17.8268 15.31 18.38 17.6167C19.6996 16.119 20.5 14.153 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM17.0246 18.8566V18.8455C17.0246 16.7744 15.3457 15.0955 13.2746 15.0955H10.7246C8.65354 15.0955 6.97461 16.7744 6.97461 18.8455V18.856C8.38223 19.8895 10.1198 20.5 12 20.5C13.8798 20.5 15.6171 19.8898 17.0246 18.8566ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9991 7.25C10.8847 7.25 9.98126 8.15342 9.98126 9.26784C9.98126 10.3823 10.8847 11.2857 11.9991 11.2857C13.1135 11.2857 14.0169 10.3823 14.0169 9.26784C14.0169 8.15342 13.1135 7.25 11.9991 7.25ZM8.48126 9.26784C8.48126 7.32499 10.0563 5.75 11.9991 5.75C13.9419 5.75 15.5169 7.32499 15.5169 9.26784C15.5169 11.2107 13.9419 12.7857 11.9991 12.7857C10.0563 12.7857 8.48126 11.2107 8.48126 9.26784Z"
                                        fill="" />
                                </svg>

                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Akun Wali Siswa
                                </span>
                            </a>
                        </li>
                        <!-- Menu Item Profile -->
                        <!-- Menu Item Profile -->
                        <li>
                            <a href="{{ route('data-mapel') }}" class="menu-item group"
                                :class="currentPage === 'data-mapel' ? 'menu-item-active' : 'menu-item-inactive'">
                                <svg :class="currentPage === 'data-mapel' ? 'menu-item-icon-active' : 'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H18.5001C19.7427 20.75 20.7501 19.7426 20.7501 18.5V5.5C20.7501 4.25736 19.7427 3.25 18.5001 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H18.5001C18.9143 4.75 19.2501 5.08579 19.2501 5.5V18.5C19.2501 18.9142 18.9143 19.25 18.5001 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V5.5ZM6.25005 9.7143C6.25005 9.30008 6.58583 8.9643 7.00005 8.9643L17 8.96429C17.4143 8.96429 17.75 9.30008 17.75 9.71429C17.75 10.1285 17.4143 10.4643 17 10.4643L7.00005 10.4643C6.58583 10.4643 6.25005 10.1285 6.25005 9.7143ZM6.25005 14.2857C6.25005 13.8715 6.58583 13.5357 7.00005 13.5357H17C17.4143 13.5357 17.75 13.8715 17.75 14.2857C17.75 14.6999 17.4143 15.0357 17 15.0357H7.00005C6.58583 15.0357 6.25005 14.6999 6.25005 14.2857Z" />
                                </svg>
                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Data Mata Pelajaran
                                </span>
                            </a>
                        </li>
                        <!-- Menu Item Profile -->

                        <!-- Menu Item Tables -->
                        <li>
                            <a href="#" @click.prevent="selected = (selected === 'Tables' ? '' : 'Tables')"
                                class="menu-item group"
                                :class="(selected === 'Tables' || currentPage === 'data-siswa' ||
                                    currentPage === 'data-mentor') ?
                                'menu-item-active' : 'menu-item-inactive'">
                                <svg :class="(selected === 'Tables' || currentPage === 'data-siswa' ||
                                    currentPage === 'data-mentor') ?
                                'menu-item-icon-active' : 'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.25 5.5C3.25 4.25736 4.25736 3.25 5.5 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V18.5C20.75 19.7426 19.7426 20.75 18.5 20.75H5.5C4.25736 20.75 3.25 19.7426 3.25 18.5V5.5ZM5.5 4.75C5.08579 4.75 4.75 5.08579 4.75 5.5V8.58325L19.25 8.58325V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H5.5ZM19.25 10.0833H15.416V13.9165H19.25V10.0833ZM13.916 10.0833L10.083 10.0833V13.9165L13.916 13.9165V10.0833ZM8.58301 10.0833H4.75V13.9165H8.58301V10.0833ZM4.75 18.5V15.4165H8.58301V19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5ZM10.083 19.25V15.4165L13.916 15.4165V19.25H10.083ZM15.416 19.25V15.4165H19.25V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15.416Z"
                                        fill="" />
                                </svg>

                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Rekapitulasi Data
                                </span>

                                <svg class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
                                    :class="[(selected === 'Tables' || currentPage === 'data-siswa' ||
                                            currentPage === 'data-mentor') ? 'menu-item-arrow-active' :
                                        'menu-item-arrow-inactive',
                                        sidebarToggle ? 'lg:hidden' : ''
                                    ]"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke=""
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden"
                                :class="(selected === 'Tables' || currentPage === 'data-siswa' ||
                                    currentPage === 'data-mentor') ? 'block' : 'hidden'"
                                x-init="if (currentPage === 'data-siswa' || currentPage === 'data-mentor') { selected = 'Tables' }">
                                <ul :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                                    class="menu-dropdown mt-2 flex flex-col gap-1 pl-9">
                                    <li>
                                        <a href="{{ route('data-siswa') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'data-siswa' || currentPage === 'form-siswa' ?
                                                'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Siswa
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('data-mentor') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'data-mentor' || currentPage === 'form-mentor' ?
                                                'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Tentor
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Menu Item Tables End -->
                        </li>

                        <!-- Menu Item Pages -->
                        <li>
                            <a href="#" @click.prevent="selected = (selected === 'Pages' ? '':'Pages')"
                                class="menu-item group"
                                :class="(selected === 'Pages' || currentPage === 'nilai-bulanan' ||
                                    currentPage === 'nilai-semester') ? 'menu-item-active' :
                                'menu-item-inactive'">
                                <svg :class="(selected === 'Pages' || currentPage === 'nilai-bulanan' ||
                                    currentPage === 'nilai-semester') ? 'menu-item-icon-active' :
                                'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.50391 4.25C8.50391 3.83579 8.83969 3.5 9.25391 3.5H15.2777C15.4766 3.5 15.6674 3.57902 15.8081 3.71967L18.2807 6.19234C18.4214 6.333 18.5004 6.52376 18.5004 6.72268V16.75C18.5004 17.1642 18.1646 17.5 17.7504 17.5H16.248V17.4993H14.748V17.5H9.25391C8.83969 17.5 8.50391 17.1642 8.50391 16.75V4.25ZM14.748 19H9.25391C8.01126 19 7.00391 17.9926 7.00391 16.75V6.49854H6.24805C5.83383 6.49854 5.49805 6.83432 5.49805 7.24854V19.75C5.49805 20.1642 5.83383 20.5 6.24805 20.5H13.998C14.4123 20.5 14.748 20.1642 14.748 19.75L14.748 19ZM7.00391 4.99854V4.25C7.00391 3.00736 8.01127 2 9.25391 2H15.2777C15.8745 2 16.4468 2.23705 16.8687 2.659L19.3414 5.13168C19.7634 5.55364 20.0004 6.12594 20.0004 6.72268V16.75C20.0004 17.9926 18.9931 19 17.7504 19H16.248L16.248 19.75C16.248 20.9926 15.2407 22 13.998 22H6.24805C5.00541 22 3.99805 20.9926 3.99805 19.75V7.24854C3.99805 6.00589 5.00541 4.99854 6.24805 4.99854H7.00391Z"
                                        fill="" />
                                </svg>

                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Penilaian Siswa
                                </span>

                                <svg class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
                                    :class="[(selected === 'Pages' || currentPage === 'nilai-bulanan') ?
                                        'menu-item-arrow-active' : 'menu-item-arrow-inactive',
                                        sidebarToggle ? 'lg:hidden' : ''
                                    ]"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke=""
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="overflow-hidden transform translate"
                                :class="(selected === 'Pages' || currentPage === 'nilai-bulanan' ||
                                    currentPage === 'nilai-semester') ? 'block' : 'hidden'"
                                x-init="if (currentPage === 'nilai-bulanan' || currentPage === 'nilai-semester') { selected = 'Pages' }">
                                <ul
                                    :class="[sidebarToggle ? 'lg:hidden' : '', 'flex flex-col gap-1 mt-2 menu-dropdown pl-9']">
                                    <li>
                                        <a href="{{ route('nilai-bulanan') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'nilai-bulanan' || currentPage === 'raport-bulanan' ?
                                                'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Bulanan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('nilai-semester') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'nilai-semester' || currentPage === 'raport-semester' ?
                                                'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Semester
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                    @endif
                    <!-- end menu admin Item Pages -->

                    {{-- wali murid --}}
                    @if (Auth::check() && Auth::user()->role === 'wali_murid')
                        <li>
                            <a href="#" @click.prevent="selected = (selected === 'Pages' ? '':'Pages')"
                                class="menu-item group"
                                :class="(selected === 'Pages' || currentPage === 'penilaian-bulanan-siswa' ||
                                    currentPage === 'penilaian-semester-siswa') ? 'menu-item-active' :
                                'menu-item-inactive'">
                                <svg :class="(selected === 'Pages' || currentPage === 'penilaian-bulanan-siswa' ||
                                    currentPage === 'penilaian-semester-siswa') ? 'menu-item-icon-active' :
                                'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.50391 4.25C8.50391 3.83579 8.83969 3.5 9.25391 3.5H15.2777C15.4766 3.5 15.6674 3.57902 15.8081 3.71967L18.2807 6.19234C18.4214 6.333 18.5004 6.52376 18.5004 6.72268V16.75C18.5004 17.1642 18.1646 17.5 17.7504 17.5H16.248V17.4993H14.748V17.5H9.25391C8.83969 17.5 8.50391 17.1642 8.50391 16.75V4.25ZM14.748 19H9.25391C8.01126 19 7.00391 17.9926 7.00391 16.75V6.49854H6.24805C5.83383 6.49854 5.49805 6.83432 5.49805 7.24854V19.75C5.49805 20.1642 5.83383 20.5 6.24805 20.5H13.998C14.4123 20.5 14.748 20.1642 14.748 19.75L14.748 19ZM7.00391 4.99854V4.25C7.00391 3.00736 8.01127 2 9.25391 2H15.2777C15.8745 2 16.4468 2.23705 16.8687 2.659L19.3414 5.13168C19.7634 5.55364 20.0004 6.12594 20.0004 6.72268V16.75C20.0004 17.9926 18.9931 19 17.7504 19H16.248L16.248 19.75C16.248 20.9926 15.2407 22 13.998 22H6.24805C5.00541 22 3.99805 20.9926 3.99805 19.75V7.24854C3.99805 6.00589 5.00541 4.99854 6.24805 4.99854H7.00391Z"
                                        fill="" />
                                </svg>

                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Penilaian Siswa
                                </span>

                                <svg class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
                                    :class="[(selected === 'Pages' || currentPage === 'penilaian-bulanan-siswa') ?
                                        'menu-item-arrow-active' : 'menu-item-arrow-inactive',
                                        sidebarToggle ? 'lg:hidden' : ''
                                    ]"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke=""
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <!-- Dropdown Menu Start -->
                            <div class="overflow-hidden transform translate"
                                :class="(selected === 'Pages' || currentPage === 'penilaian-bulanan-siswa' ||
                                    currentPage === 'penilaian-semester-siswa') ? 'block' : 'hidden'"
                                x-init="if (currentPage === 'penilaian-bulanan-siswa' || currentPage === 'penilaian-siswa-bln') { selected = 'Pages' }">
                                <ul
                                    :class="[sidebarToggle ? 'lg:hidden' : '', 'flex flex-col gap-1 mt-2 menu-dropdown pl-9']">
                                    <li>
                                        <a href="{{ route('penilaian-bulanan-siswa') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'penilaian-bulanan-siswa' ||
                                                currentPage === 'raport-bulanan' ?
                                                'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Bulanan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('penilaian-semester-siswa') }}"
                                            class="group relative flex items-center gap-2.5 rounded-xl px-4 py-2 text-sm font-medium duration-300 ease-in-out"
                                            :class="currentPage === 'penilaian-semester-siswa' ||
                                                currentPage === 'raport-semester' ?
                                                'bg-[#ebf3ff] text-blue-600 font-semibold' :
                                                'text-gray-700 hover:bg-gray-100 dark:text-white/70 hover:text-gray-900 dark:hover:bg-gray-800'">
                                            Semester
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>

                        <li>
                            <a href="{{ route('profile') }}" class="menu-item group"
                                :class="currentPage === 'profile' ? 'menu-item-active' : 'menu-item-inactive'">
                                <svg :class="currentPage === 'profile' ? 'menu-item-icon-active' : 'menu-item-icon-inactive'"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 14.1526 4.3002 16.1184 5.61936 17.616C6.17279 15.3096 8.24852 13.5955 10.7246 13.5955H13.2746C15.7509 13.5955 17.8268 15.31 18.38 17.6167C19.6996 16.119 20.5 14.153 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM17.0246 18.8566V18.8455C17.0246 16.7744 15.3457 15.0955 13.2746 15.0955H10.7246C8.65354 15.0955 6.97461 16.7744 6.97461 18.8455V18.856C8.38223 19.8895 10.1198 20.5 12 20.5C13.8798 20.5 15.6171 19.8898 17.0246 18.8566ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9991 7.25C10.8847 7.25 9.98126 8.15342 9.98126 9.26784C9.98126 10.3823 10.8847 11.2857 11.9991 11.2857C13.1135 11.2857 14.0169 10.3823 14.0169 9.26784C14.0169 8.15342 13.1135 7.25 11.9991 7.25ZM8.48126 9.26784C8.48126 7.32499 10.0563 5.75 11.9991 5.75C13.9419 5.75 15.5169 7.32499 15.5169 9.26784C15.5169 11.2107 13.9419 12.7857 11.9991 12.7857C10.0563 12.7857 8.48126 11.2107 8.48126 9.26784Z"
                                        fill="" />
                                </svg>

                                <span class="menu-item-text" :class="sidebarToggle ? 'lg:hidden' : ''">
                                    Profile
                                </span>
                            </a>
                        </li>
                    @endif
                    {{-- end menu wali --}}
                </ul>
            </div>

            @if (Auth::check() && Auth::user()->role === 'admin')
                <div :class="sidebarToggle ? 'lg:hidden' : ''"
                    class="mx-auto mb-10 w-full max-w-60 rounded-2xl bg-gray-50 px-4 py-5 text-center dark:bg-white/[0.03]">
                    <h3 class="mb-2 font-semibold text-gray-900 dark:text-white">
                        Smart Kids Academy
                    </h3>
                    <img src="images/website/header-1.svg">
                    <p class="mb-4 mt-4 text-theme-sm text-gray-500 dark:text-gray-400">
                        Panel admin untuk pengelolaan data siswa, mapel dan tentor
                    </p>
                    <a href="{{route('web')}}"
                        class="flex items-center justify-center rounded-lg bg-brand-500 p-3 text-theme-sm font-medium text-white hover:bg-brand-600">
                        Kembali ke Beranda
                    </a>
                </div>
            @endif

            @if (Auth::check() && Auth::user()->role === 'wali_murid')
                <div :class="sidebarToggle ? 'lg:hidden' : ''"
                    class="mx-auto mb-10 w-full max-w-60 rounded-2xl bg-gray-50 px-4 py-5 text-center dark:bg-white/[0.03]" style="margin-top:80px;">
                    <h3 class="mb-2 font-semibold text-gray-900 dark:text-white">
                        Smart Kids Academy
                    </h3>
                    <img src="images/website/header-1.svg">
                    <p class="mb-4 text-theme-sm text-gray-500 dark:text-gray-400">
                        Platform pemantauan hasil belajar siswa untuk mendukung evaluasi pendidikan yang lebih efektif.
                    </p>
                    <a href="{{route('web')}}"
                        class="flex items-center justify-center rounded-lg bg-brand-500 p-3 text-theme-sm font-medium text-white hover:bg-brand-600">
                        Kembali ke Beranda
                    </a>
                </div>
            @endif

            {{-- <!-- Promo Box --}}
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
<!-- ===== Sidebar End ===== -->

<!-- CSS untuk menambahkan style yang missing -->
