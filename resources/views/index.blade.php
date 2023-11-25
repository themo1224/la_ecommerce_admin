
<html lang="en">
  <head>
    <title>Base Tailwind CSS Dashboard Template</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"/>
    <link rel="stylesheet" href="{{asset('assets/css/tailwind/tailwind.min.css')}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png"/>
    <script src="{{asset('assets/js/main.js')}}"></script>
  </head>
  <body class="antialiased bg-body text-body font-body">
    <div>
      <section class="relative bg-white">
        <nav class="flex xl:hidden items-center justify-between py-3.5 px-7 bg-light">
          <div class="w-full xl:w-auto px-2 xl:mr-10">
            <div class="flex items-center justify-between"><a class="inline-flex items-center h-7" href="#"><img src="logos/circle2-logo.svg" alt=""/></a>
              <div class="xl:hidden">
                <button class="navbar-burger text-gray-400 hover:text-gray-300 focus:outline-none">
                  <svg width="20" height="12" viewbox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 2H19C19.2652 2 19.5196 1.89464 19.7071 1.70711C19.8946 1.51957 20 1.26522 20 1C20 0.734784 19.8946 0.48043 19.7071 0.292893C19.5196 0.105357 19.2652 0 19 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2ZM19 10H1C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11C0 11.2652 0.105357 11.5196 0.292893 11.7071C0.48043 11.8946 0.734784 12 1 12H19C19.2652 12 19.5196 11.8946 19.7071 11.7071C19.8946 11.5196 20 11.2652 20 11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10ZM19 5H1C0.734784 5 0.48043 5.10536 0.292893 5.29289C0.105357 5.48043 0 5.73478 0 6C0 6.26522 0.105357 6.51957 0.292893 6.70711C0.48043 6.89464 0.734784 7 1 7H19C19.2652 7 19.5196 6.89464 19.7071 6.70711C19.8946 6.51957 20 6.26522 20 6C20 5.73478 19.8946 5.48043 19.7071 5.29289C19.5196 5.10536 19.2652 5 19 5Z" fill="currentColor"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </nav>
        <div class="navbar-menu relative z-50 hidden xl:flex xl:flex-col">
          <div class="navbar-backdrop fixed xl:hidden inset-0 bg-gray-800 opacity-10"></div>
          <div class="fixed inset-0 max-w-xss bg-light border-r">
            <div class="flex flex-wrap items-center justify-between px-7 py-6 pb-0">
              <div class="w-auto"><a class="inline-block" href="#"><img class="w-24" src="{{asset('assets/logos/logo-dark.svg')}}" alt=""/></a></div>
            </div>
            <div class="flex-1 flex flex-col justify-between py-8 overflow-x-hidden overflow-y-auto">
              <div class="flex flex-col flex-wrap px-7 mb-8 -m-2.5">
                <div class="w-auto p-2.5"><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/home-2.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">Dashboard</p></a></div>
                <div class="w-auto p-2.5">
                  <p class="text-xs text-neutral-400 font-medium uppercase mb-4 mt-4">User</p><a class="flex flex-wrap items-center mb-3.5" href="#"><img class="mr-3" src="{{asset('assets/images/user-circle.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">People & Settings</p></a>
                </div>
                <div class="w-auto p-2.5">
                  <p class="text-xs text-neutral-400 font-medium uppercase mb-4">Information</p><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/loader-rec.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">Discover</p></a>
                </div>
                <div class="w-auto p-2.5"><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/lifebuoy.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">Help with Sketch</p></a></div>
                <div class="w-auto p-2.5"><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/folder-open.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">All Documents</p></a></div>
                <div class="w-auto p-2.5">
                  <p class="text-xs text-neutral-400 font-medium uppercase mb-4 mt-4">Help</p><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/link-2-rec.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">Libraries</p></a>
                </div>
                <div class="w-auto p-2.5"><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/list-unordered-3-rec.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">My Drafts</p></a></div>
                <div class="w-auto p-2.5"><a class="flex flex-wrap items-center" href="#"><img class="mr-3" src="{{asset('assets/images/trash.svg')}}" alt=""/>
                    <p class="hover:text-neutral-700 font-medium">Trash</p></a></div>
              </div>
              <div class="flex flex-wrap items-center justify-between px-7 -m-2">
                <div class="w-auto p-2">
                  <div class="flex flex-wrap -m-1.5">
                    <div class="w-auto p-1.5"><img src="{{asset('assets/images/avatar.png')}}" alt=""/></div>
                    <div class="w-auto p-1.5">
                      <h3 class="font-heading font-semibold text-sm">Dawid Jonson</h3>
                      <p class="text-xs text-neutral-500">dawid.j@gmail.com</p>
                    </div>
                  </div>
                </div>
                <div class="w-auto p-2"><a class="text-neutral-400 hover:text-neutral-500" href="#">
                    <svg width="18" height="17" viewbox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.46015 2.98571L5.8504 2.34523L5.46015 2.98571ZM7.60386 2.09776L6.87503 1.92082L7.60386 2.09776ZM3.48571 4.96015L2.84523 5.3504L3.48571 4.96015ZM2.59776 7.10386L2.42082 6.37503L2.59776 7.10386ZM2.59776 9.89614L2.77469 9.16731L2.59776 9.89614ZM3.48571 12.0398L2.84523 11.6496L3.48571 12.0398ZM5.46016 14.0143L5.8504 14.6548L5.46016 14.0143ZM7.60386 14.9022L8.33269 14.7253L7.60386 14.9022ZM10.3961 14.9022L11.125 15.0792L10.3961 14.9022ZM12.5398 14.0143L12.1496 14.6548L12.5398 14.0143ZM14.5143 12.0398L15.1548 11.6496L14.5143 12.0398ZM15.4022 9.89614L15.5792 10.625L15.4022 9.89614ZM15.4022 7.10386L15.2253 7.83269L15.4022 7.10386ZM14.5143 4.96015L15.1548 5.3504L14.5143 4.96015ZM12.5398 2.98571L12.1496 2.34523L12.5398 2.98571ZM10.3961 2.09776L9.66732 2.27469L10.3961 2.09776ZM5.06991 3.62618C6.33455 4.39674 7.98332 3.7138 8.33269 2.27469L6.87503 1.92082C6.76531 2.37275 6.24754 2.58722 5.8504 2.34523L5.06991 3.62618ZM4.12618 4.56991C3.75159 3.95513 4.45513 3.25159 5.06991 3.62618L5.8504 2.34523C3.89271 1.15239 1.65239 3.39271 2.84523 5.3504L4.12618 4.56991ZM2.77469 7.83269C4.2138 7.48332 4.89674 5.83455 4.12618 4.56991L2.84523 5.3504C3.08722 5.74754 2.87275 6.26531 2.42082 6.37503L2.77469 7.83269ZM2.77469 9.16731C2.0751 8.99748 2.0751 8.00252 2.77469 7.83269L2.42082 6.37503C0.193058 6.91585 0.193061 10.0841 2.42082 10.625L2.77469 9.16731ZM4.12618 12.4301C4.89674 11.1655 4.2138 9.51668 2.77469 9.16731L2.42082 10.625C2.87275 10.7347 3.08722 11.2525 2.84523 11.6496L4.12618 12.4301ZM5.06991 13.3738C4.45513 13.7484 3.75159 13.0449 4.12618 12.4301L2.84523 11.6496C1.65239 13.6073 3.89271 15.8476 5.8504 14.6548L5.06991 13.3738ZM8.33269 14.7253C7.98332 13.2862 6.33455 12.6033 5.06991 13.3738L5.8504 14.6548C6.24754 14.4128 6.76531 14.6273 6.87503 15.0792L8.33269 14.7253ZM9.66732 14.7253C9.49748 15.4249 8.50252 15.4249 8.33269 14.7253L6.87503 15.0792C7.41586 17.3069 10.5841 17.3069 11.125 15.0792L9.66732 14.7253ZM12.9301 13.3738C11.6655 12.6033 10.0167 13.2862 9.66732 14.7253L11.125 15.0792C11.2347 14.6273 11.7525 14.4128 12.1496 14.6548L12.9301 13.3738ZM13.8738 12.4301C14.2484 13.0449 13.5449 13.7484 12.9301 13.3738L12.1496 14.6548C14.1073 15.8476 16.3476 13.6073 15.1548 11.6496L13.8738 12.4301ZM15.2253 9.16731C13.7862 9.51668 13.1033 11.1655 13.8738 12.4301L15.1548 11.6496C14.9128 11.2525 15.1273 10.7347 15.5792 10.625L15.2253 9.16731ZM15.2253 7.83269C15.9249 8.00252 15.9249 8.99748 15.2253 9.16731L15.5792 10.625C17.8069 10.0841 17.8069 6.91585 15.5792 6.37503L15.2253 7.83269ZM13.8738 4.56991C13.1033 5.83455 13.7862 7.48332 15.2253 7.83269L15.5792 6.37503C15.1273 6.26531 14.9128 5.74754 15.1548 5.3504L13.8738 4.56991ZM12.9301 3.62618C13.5449 3.25159 14.2484 3.95513 13.8738 4.56991L15.1548 5.3504C16.3476 3.39271 14.1073 1.15239 12.1496 2.34523L12.9301 3.62618ZM9.66732 2.27469C10.0167 3.7138 11.6655 4.39674 12.9301 3.62618L12.1496 2.34523C11.7525 2.58722 11.2347 2.37275 11.125 1.92082L9.66732 2.27469ZM11.125 1.92082C10.5841 -0.306939 7.41586 -0.306942 6.87503 1.92082L8.33269 2.27469C8.50252 1.5751 9.49748 1.5751 9.66732 2.27469L11.125 1.92082ZM10.75 8.5C10.75 9.4665 9.9665 10.25 9 10.25V11.75C10.7949 11.75 12.25 10.2949 12.25 8.5H10.75ZM9 10.25C8.0335 10.25 7.25 9.4665 7.25 8.5H5.75C5.75 10.2949 7.20507 11.75 9 11.75V10.25ZM7.25 8.5C7.25 7.5335 8.0335 6.75 9 6.75V5.25C7.20507 5.25 5.75 6.70507 5.75 8.5H7.25ZM9 6.75C9.9665 6.75 10.75 7.5335 10.75 8.5H12.25C12.25 6.70507 10.7949 5.25 9 5.25V6.75Z" fill="currentColor"></path>
                    </svg></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto xl:ml-xss xl:pl-4">
          <section class="py-4 overflow-hidden">
            <div class="container px-4 mx-auto">
              <ul class="inline-flex flex-wrap items-center -m-0.5">
                <li class="p-0.5"><a class="group flex items-center text-xs text-neutral-400 hover:text-neutral-600" href="#">
                    <svg class="mr-1" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.33333 3.33331L7.68689 2.97976C7.59312 2.88599 7.46594 2.83331 7.33333 2.83331V3.33331ZM8.66667 4.66665L8.31311 5.0202C8.40688 5.11397 8.53406 5.16665 8.66667 5.16665V4.66665ZM2.5 11.3333V4.66665H1.5V11.3333H2.5ZM3.33333 3.83331H7.33333V2.83331H3.33333V3.83331ZM6.97978 3.68687L8.31311 5.0202L9.02022 4.31309L7.68689 2.97976L6.97978 3.68687ZM8.66667 5.16665H12.6667V4.16665H8.66667V5.16665ZM13.5 5.99998V11.3333H14.5V5.99998H13.5ZM12.6667 12.1666H3.33333V13.1666H12.6667V12.1666ZM12.6667 5.16665C13.1269 5.16665 13.5 5.53974 13.5 5.99998H14.5C14.5 4.98746 13.6792 4.16665 12.6667 4.16665V5.16665ZM2.5 4.66665C2.5 4.20641 2.8731 3.83331 3.33333 3.83331V2.83331C2.32081 2.83331 1.5 3.65412 1.5 4.66665H2.5ZM13.5 11.3333C13.5 11.7936 13.1269 12.1666 12.6667 12.1666V13.1666C13.6792 13.1666 14.5 12.3458 14.5 11.3333H13.5ZM1.5 11.3333C1.5 12.3458 2.32081 13.1666 3.33333 13.1666V12.1666C2.8731 12.1666 2.5 11.7936 2.5 11.3333H1.5Z" fill="currentColor"></path>
                    </svg>
                    <svg class="text-neutral-300 group-hover:text-neutral-400" width="12" height="13" viewbox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.5 3L8 6.5L4.5 10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
                <li class="p-0.5"><a class="group flex items-center text-xs text-neutral-400 hover:text-neutral-600" href="#"><span class="mr-1">Customers</span>
                    <svg class="text-neutral-300 group-hover:text-neutral-400" width="12" height="13" viewbox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.5 3L8 6.5L4.5 10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
                <li class="p-0.5"><a class="group flex items-center text-xs text-neutral-400 hover:text-neutral-600" href="#"><span class="mr-1">Profile</span>
                    <svg class="text-neutral-300 group-hover:text-neutral-400" width="12" height="13" viewbox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.5 3L8 6.5L4.5 10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
                <li class="p-0.5"><a class="group flex items-center text-xs text-neutral-600" href="#"><span>Edit</span></a></li>
              </ul>
            </div>
          </section>
          <div class="container mx-auto">
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="bg-white overflow-hidden border rounded-xl">
                  <div class="px-6 pt-6 pb-7">
                    <div class="flex flex-wrap items-center mb-3.5 -m-2">
                      <div class="w-auto p-2"><img src="{{asset('assets/images/card-avatar3.png')}}" alt=""/></div>
                      <div class="w-auto p-2">
                        <p class="text-neutral-500 font-medium">@Floyd Miles</p>
                      </div>
                    </div>
                    <p class="text-xl font-medium">Like this template and want to download it? Visit www.pixelrocket.store</p>
                  </div><a class="flex flex-wrap justify-between px-6 py-4 text-neutral-50 hover:text-neutral-100 bg-gradient-purple-left" href="https://www.pixelrocket.store"><span class="mr-3 text-lg font-semibold">Learn More</span>
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.7071 4.29289C14.3166 3.90237 13.6834 3.90237 13.2929 4.29289C12.9024 4.68342 12.9024 5.31658 13.2929 5.70711L14.7071 4.29289ZM21 12L21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929L21 12ZM13.2929 18.2929C12.9024 18.6834 12.9024 19.3166 13.2929 19.7071C13.6834 20.0976 14.3166 20.0976 14.7071 19.7071L13.2929 18.2929ZM3 11C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13L3 11ZM13.2929 5.70711L20.2929 12.7071L21.7071 11.2929L14.7071 4.29289L13.2929 5.70711ZM20.2929 11.2929L13.2929 18.2929L14.7071 19.7071L21.7071 12.7071L20.2929 11.2929ZM21 11L3 11L3 13L21 13V11Z" fill="currentColor"></path>
                    </svg></a>
                </div>
              </div>
            </section>
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="bg-white border rounded-xl">
                  <div class="flex flex-wrap divide-y sm:divide-y-0 sm:divide-x">
                    <div class="w-full sm:w-1/2">
                      <div class="p-12 text-center"><img class="mb-7 mx-auto" src="{{asset('assets/images/empty3.png')}}" alt=""/>
                        <h3 class="mb-3 font-heading text-lg font-semibold">Create your first project on Base</h3>
                        <p class="mb-7 text-neutral-500">Establish a clear vision so that managers in your organization can mobilize their teams to all work in the same direction.</p><a class="inline-flex flex-wrap items-center justify-center px-6 py-2.5 text-sm text-neutral-50 font-medium bg-gradient-purple-left hover:bg-gradient-purple-left-dark rounded-lg transition duration-300" href="#">
                          <svg class="mr-2.5" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.74935 2.66663C8.74935 2.25241 8.41356 1.91663 7.99935 1.91663C7.58514 1.91663 7.24935 2.25241 7.24935 2.66663H8.74935ZM7.24935 13.3333C7.24935 13.7475 7.58514 14.0833 7.99935 14.0833C8.41356 14.0833 8.74935 13.7475 8.74935 13.3333H7.24935ZM13.3327 8.74996C13.7469 8.74996 14.0827 8.41417 14.0827 7.99996C14.0827 7.58575 13.7469 7.24996 13.3327 7.24996L13.3327 8.74996ZM2.66602 7.24996C2.2518 7.24996 1.91602 7.58575 1.91602 7.99996C1.91602 8.41417 2.2518 8.74996 2.66602 8.74996L2.66602 7.24996ZM7.24935 2.66663V13.3333H8.74935V2.66663H7.24935ZM13.3327 7.24996L2.66602 7.24996L2.66602 8.74996L13.3327 8.74996L13.3327 7.24996Z" fill="#F9FAFB"></path>
                          </svg><span class="font-medium">Create A Project</span></a>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                      <div class="p-12 text-center"><img class="mb-7 mx-auto" src="{{asset('assets/images/empty4.png')}}" alt=""/>
                        <h3 class="mb-3 font-heading text-lg font-semibold">Add your first task</h3>
                        <p class="mb-7 text-neutral-500">Create a goal for one of your teams that will appear in the team hub-that’s how everyone will know what to work on.</p><a class="inline-flex flex-wrap items-center justify-center px-6 py-2.5 text-sm border hover:border-neutral-200 rounded-lg" href="#">
                          <svg class="mr-2.5" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.74935 2.66663C8.74935 2.25241 8.41356 1.91663 7.99935 1.91663C7.58514 1.91663 7.24935 2.25241 7.24935 2.66663H8.74935ZM7.24935 13.3333C7.24935 13.7475 7.58514 14.0833 7.99935 14.0833C8.41356 14.0833 8.74935 13.7475 8.74935 13.3333H7.24935ZM13.3327 8.74996C13.7469 8.74996 14.0827 8.41417 14.0827 7.99996C14.0827 7.58575 13.7469 7.24996 13.3327 7.24996L13.3327 8.74996ZM2.66602 7.24996C2.2518 7.24996 1.91602 7.58575 1.91602 7.99996C1.91602 8.41417 2.2518 8.74996 2.66602 8.74996L2.66602 7.24996ZM7.24935 2.66663V13.3333H8.74935V2.66663H7.24935ZM13.3327 7.24996L2.66602 7.24996L2.66602 8.74996L13.3327 8.74996L13.3327 7.24996Z" fill="#0C1523"></path>
                          </svg><span class="font-medium">Add A Task</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="container mx-auto">
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="flex flex-wrap -m-3">
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="px-5 py-3.5 h-full bg-white border rounded-lg">
                      <div class="flex flex-wrap items-center justify-between -m-1">
                        <div class="w-auto p-1">
                          <p class="text-sm text-neutral-500 font-medium">New Customers</p>
                        </div>
                        <div class="w-auto p-1"><a class="inline-flex text-xs hover:text-neutral-500 font-medium" href="#"><span class="mr-2">This week</span>
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.6668 6L8.00016 10.6667L3.3335 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a></div>
                      </div>
                      <div class="flex flex-wrap justify-between -m-1">
                        <div class="w-full sm:w-5/12 p-1">
                          <h3 class="font-heading mb-1 text-3xl tracking-tight font-semibold">137</h3>
                        </div>
                        <div class="w-full sm:w-7/12 p-1">
                          <div class="chart" data-type="area-state2-2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="px-5 py-3.5 h-full bg-white border rounded-lg">
                      <div class="flex flex-wrap items-center justify-between -m-1">
                        <div class="w-auto p-1">
                          <p class="text-sm text-neutral-500 font-medium">Revenue</p>
                        </div>
                        <div class="w-auto p-1"><a class="inline-flex text-xs hover:text-neutral-500 font-medium" href="#"><span class="mr-2">This week</span>
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.6668 6L8.00016 10.6667L3.3335 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a></div>
                      </div>
                      <div class="flex flex-wrap justify-between -m-1">
                        <div class="w-full sm:w-5/12 p-1">
                          <h3 class="font-heading mb-1 text-3xl tracking-tight font-semibold">$5799.00</h3>
                        </div>
                        <div class="w-full sm:w-7/12 p-1">
                          <div class="chart" data-type="area-state2-1"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="px-5 py-3.5 h-full bg-white border rounded-lg">
                      <div class="flex flex-wrap items-center justify-between -m-1">
                        <div class="w-auto p-1">
                          <p class="text-sm text-neutral-500 font-medium">Occupancy</p>
                        </div>
                        <div class="w-auto p-1"><a class="inline-flex text-xs hover:text-neutral-500 font-medium" href="#"><span class="mr-2">This week</span>
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.6668 6L8.00016 10.6667L3.3335 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a></div>
                      </div>
                      <div class="flex flex-wrap justify-between -m-1">
                        <div class="w-full sm:w-5/12 p-1">
                          <h3 class="font-heading mb-1 text-3xl tracking-tight font-semibold">0.7%</h3>
                        </div>
                        <div class="w-full sm:w-7/12 p-1">
                          <div class="chart" data-type="area-state2-3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-4 bg-white overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="flex flex-wrap -m-3">
                  <div class="w-full sm:w-1/3 p-3">
                    <div class="p-5 h-full bg-light rounded-lg">
                      <div class="flex items-center justify-center mb-7 w-12 h-12 bg-white rounded-full">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.12" d="M4 14C4 18.5455 7.5 22 12 22C16.5 22 20 18.5455 20 14C20 5.81818 12 2 12 2C12 6 13 12 10 12C8 12 7.5 10 7.5 6.5C7.5 6.5 4 9.45455 4 14Z" fill="#FF3131"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.323 1.32314L12 2C12.323 1.32314 12.3234 1.32329 12.3237 1.32345L12.3245 1.32384L12.3267 1.3249L12.3333 1.32808L12.355 1.33872C12.3732 1.3477 12.3988 1.3605 12.4313 1.37712C12.4963 1.41036 12.589 1.45893 12.7054 1.52297C12.938 1.65101 13.2661 1.84125 13.6577 2.09495C14.4398 2.60151 15.4826 3.36563 16.5273 4.39847C18.6151 6.46256 20.75 9.64303 20.75 14C20.75 18.9625 16.9114 22.75 12 22.75C7.08859 22.75 3.25 18.9625 3.25 14C3.25 11.5317 4.19985 9.51259 5.1268 8.12818C5.59171 7.43383 6.05669 6.89016 6.40743 6.51816C6.58308 6.33187 6.73088 6.18778 6.83682 6.08852C6.88982 6.03887 6.93241 6.00036 6.96287 5.97333C6.9781 5.95982 6.99031 5.94916 6.99927 5.94141L7.01025 5.93196L7.01387 5.92888L7.0152 5.92775L7.01575 5.92729C7.01599 5.92709 7.01621 5.9269 7.5 6.5L7.01621 5.9269C7.23924 5.73862 7.55125 5.69684 7.81596 5.8198C8.08067 5.94276 8.25 6.20813 8.25 6.5C8.25 8.24691 8.3798 9.49256 8.69636 10.284C8.8486 10.6646 9.02629 10.893 9.21101 11.0294C9.38865 11.1605 9.63134 11.25 10 11.25C10.2432 11.25 10.4086 11.1915 10.5334 11.1089C10.6637 11.0227 10.7937 10.8807 10.9141 10.6514C11.1661 10.1714 11.3156 9.42754 11.3765 8.45322C11.4363 7.496 11.4069 6.40561 11.36 5.28122C11.3502 5.04485 11.3395 4.80652 11.3289 4.56793C11.2895 3.68732 11.25 2.8031 11.25 2C11.25 1.74251 11.3821 1.50303 11.5999 1.36566C11.8176 1.22828 12.0907 1.21223 12.323 1.32314ZM6.81064 8.35487C6.66807 8.53958 6.52064 8.74253 6.3732 8.96273C5.55015 10.192 4.75 11.9228 4.75 14C4.75 18.1284 7.91141 21.25 12 21.25C16.0886 21.25 19.25 18.1284 19.25 14C19.25 10.1752 17.3849 7.35562 15.4727 5.46517C14.5174 4.52073 13.5602 3.81894 12.8423 3.35392C12.8205 3.33981 12.7989 3.32592 12.7776 3.31225C12.7913 3.69186 12.8087 4.08244 12.8265 4.48054C12.8374 4.72406 12.8484 4.9704 12.8587 5.21878C12.9056 6.34439 12.9387 7.504 12.8735 8.54679C12.8094 9.57246 12.6464 10.5786 12.2422 11.3486C12.0344 11.7443 11.7503 12.1023 11.3611 12.3599C10.9664 12.621 10.5068 12.75 10 12.75C9.36866 12.75 8.79885 12.5895 8.32024 12.2362C7.84871 11.8882 7.5264 11.3979 7.30364 10.841C7.03243 10.163 6.88386 9.32024 6.81064 8.35487Z" fill="#FF3131"></path>
                        </svg>
                      </div>
                      <h3 class="font-heading mb-2 text-2xl tracking-tight font-bold">Overdue</h3>
                      <p class="text-sm text-neutral-400 font-medium">0 Tasks</p>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/3 p-3">
                    <div class="p-5 h-full bg-light rounded-lg">
                      <div class="flex items-center justify-center mb-7 w-12 h-12 bg-white rounded-full">
                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.12" d="M4.8233 7.88348C5.5075 4.46249 8.51126 2 12 2C15.4887 2 18.4925 4.46249 19.1767 7.88348L20.4305 14.1525C20.7634 15.817 19.8791 17.4982 18.3278 18.1876C14.3272 19.9657 9.67282 19.9657 5.67217 18.1876C4.12092 17.4982 3.23659 15.817 3.56951 14.1525L4.8233 7.88348Z" fill="#FFBB29"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9999 1.25C8.15365 1.25 4.84209 3.96483 4.08777 7.7364L2.83398 14.0054C2.43126 16.019 3.50016 18.0431 5.36748 18.873C6.0493 19.176 6.74912 19.4298 7.46108 19.6343L7.56484 19.8678C8.34382 21.6205 10.0819 22.75 11.9999 22.75C13.9179 22.75 15.656 21.6205 16.435 19.8678L16.5387 19.6343C17.2507 19.4298 17.9505 19.176 18.6323 18.873C20.4996 18.0431 21.5686 16.019 21.1658 14.0054L19.912 7.7364C19.1577 3.96483 15.8462 1.25 11.9999 1.25ZM15.8892 18.2581C15.8352 18.2662 15.7823 18.2802 15.7315 18.2997C13.291 18.9283 10.7088 18.9283 8.26833 18.2997C8.21754 18.2802 8.16464 18.2662 8.1106 18.2581C7.38357 18.0623 6.66975 17.8103 5.97668 17.5023C4.7415 16.9533 4.04174 15.6151 4.30485 14.2995L5.55864 8.03057C6.17273 4.96014 8.86867 2.75 11.9999 2.75C15.1311 2.75 17.8271 4.96014 18.4412 8.03057L19.695 14.2995C19.9581 15.6151 19.2583 16.9533 18.0231 17.5023C17.3301 17.8103 16.6162 18.0623 15.8892 18.2581ZM9.44866 20.0731C11.1374 20.3372 12.8624 20.3372 14.5511 20.0731C13.9241 20.808 12.9972 21.25 11.9999 21.25C11.0026 21.25 10.0757 20.808 9.44866 20.0731Z" fill="#FFBB29"></path>
                        </svg>
                      </div>
                      <h3 class="font-heading mb-2 text-2xl tracking-tight font-bold">Upcoming</h3>
                      <p class="text-sm text-neutral-400 font-medium">3 Tasks</p>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/3 p-3">
                    <div class="p-5 h-full bg-light rounded-lg">
                      <p class="mb-8 font-medium text-neutral-500">Time Saved</p>
                      <h3 class="font-heading mb-1 text-5xl tracking-tight font-bold">12:37h</h3>
                      <p class="text-sm text-neutral-500 font-medium">In the last 14 days</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="p-6 bg-white border rounded-xl">
                  <div class="flex flex-wrap items-center justify-between -m-2">
                    <div class="w-auto p-2">
                      <h3 class="font-heading text-lg font-semibold">Activity</h3>
                    </div>
                    <div class="w-auto p-2">
                      <div class="relative h-full overflow-hidden rounded-full">
                        <select class="appearance-none py-1.5 pl-3.5 pr-10 text-sm text-neutral-600 font-medium w-full h-full bg-light outline-none cursor-pointer">
                          <option value="USD">This week</option>
                          <option value="CHF">This month</option>
                          <option value="EUR">This year</option>
                        </select>
                        <svg class="absolute top-1/2 right-4 transform -translate-y-1/2" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.1673 6L8.50065 10.6667L3.83398 6" stroke="#0C1523" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="chart" data-type="line-graph1"></div>
                </div>
              </div>
            </section>
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="py-5 bg-neutral-50 border border-neutral-100 rounded-xl">
                  <div class="px-6">
                    <h3 class="font-heading pb-8 text-lg text-neutral-600 font-semibold">Transaction History</h3>
                    <div class="mb-5 w-full overflow-x-auto">
                      <table class="w-full min-w-max">
                        <thead>
                          <tr class="text-left">
                            <th class="pb-3.5 border-b border-neutral-100"><a class="inline-flex items-center text-sm text-gray-500 font-medium uppercase" href="#"><span class="mr-1.5">Id</span>
                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7636 6.56365C5.11508 6.21218 5.68492 6.21218 6.0364 6.56365L9 9.52726L11.9636 6.56365C12.3151 6.21218 12.8849 6.21218 13.2364 6.56365C13.5879 6.91512 13.5879 7.48497 13.2364 7.83645L9.6364 11.4364C9.28492 11.7879 8.71508 11.7879 8.3636 11.4364L4.7636 7.83645C4.41213 7.48497 4.41213 6.91512 4.7636 6.56365Z" fill="#7F8995"></path>
                                </svg></a></th>
                            <th class="pb-3.5 border-b border-neutral-100"><a class="inline-flex items-center text-sm text-gray-500 font-medium" href="#"><span class="mr-1.5">Name</span>
                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7636 6.56365C5.11508 6.21218 5.68492 6.21218 6.0364 6.56365L9 9.52726L11.9636 6.56365C12.3151 6.21218 12.8849 6.21218 13.2364 6.56365C13.5879 6.91512 13.5879 7.48497 13.2364 7.83645L9.6364 11.4364C9.28492 11.7879 8.71508 11.7879 8.3636 11.4364L4.7636 7.83645C4.41213 7.48497 4.41213 6.91512 4.7636 6.56365Z" fill="#7F8995"></path>
                                </svg></a></th>
                            <th class="pb-3.5 border-b border-neutral-100"><a class="inline-flex items-center text-sm text-gray-500 font-medium" href="#"><span class="mr-1.5">Price</span>
                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7636 6.56365C5.11508 6.21218 5.68492 6.21218 6.0364 6.56365L9 9.52726L11.9636 6.56365C12.3151 6.21218 12.8849 6.21218 13.2364 6.56365C13.5879 6.91512 13.5879 7.48497 13.2364 7.83645L9.6364 11.4364C9.28492 11.7879 8.71508 11.7879 8.3636 11.4364L4.7636 7.83645C4.41213 7.48497 4.41213 6.91512 4.7636 6.56365Z" fill="#7F8995"></path>
                                </svg></a></th>
                            <th class="pb-3.5 border-b border-neutral-100"><a class="inline-flex items-center text-sm text-gray-500 font-medium" href="#"><span class="mr-1.5">Product</span>
                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7636 6.56365C5.11508 6.21218 5.68492 6.21218 6.0364 6.56365L9 9.52726L11.9636 6.56365C12.3151 6.21218 12.8849 6.21218 13.2364 6.56365C13.5879 6.91512 13.5879 7.48497 13.2364 7.83645L9.6364 11.4364C9.28492 11.7879 8.71508 11.7879 8.3636 11.4364L4.7636 7.83645C4.41213 7.48497 4.41213 6.91512 4.7636 6.56365Z" fill="#7F8995"></path>
                                </svg></a></th>
                            <th class="pb-3.5 border-b border-neutral-100"><a class="inline-flex items-center text-sm text-gray-500 font-medium" href="#"><span class="mr-1.5">Purchase Time</span>
                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7636 6.56365C5.11508 6.21218 5.68492 6.21218 6.0364 6.56365L9 9.52726L11.9636 6.56365C12.3151 6.21218 12.8849 6.21218 13.2364 6.56365C13.5879 6.91512 13.5879 7.48497 13.2364 7.83645L9.6364 11.4364C9.28492 11.7879 8.71508 11.7879 8.3636 11.4364L4.7636 7.83645C4.41213 7.48497 4.41213 6.91512 4.7636 6.56365Z" fill="#7F8995"></path>
                                </svg></a></th>
                            <th class="pb-3.5 border-b border-neutral-100"><a class="inline-flex items-center text-sm text-gray-500 font-medium" href="#"><span class="mr-1.5">Status</span>
                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7636 6.56365C5.11508 6.21218 5.68492 6.21218 6.0364 6.56365L9 9.52726L11.9636 6.56365C12.3151 6.21218 12.8849 6.21218 13.2364 6.56365C13.5879 6.91512 13.5879 7.48497 13.2364 7.83645L9.6364 11.4364C9.28492 11.7879 8.71508 11.7879 8.3636 11.4364L4.7636 7.83645C4.41213 7.48497 4.41213 6.91512 4.7636 6.56365Z" fill="#7F8995"></path>
                                </svg></a></th>
                            <th class="pb-3.5 border-b border-neutral-100"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100">
                              <div class="flex flex-wrap items-center"><img class="mr-3 h-9" src="images/avatar5.png" alt=""/><span class="font-semibold">Darrell Steward</span></div>
                            </td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">$17.84</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">Playstation 4 Limited Edition</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="text-neutral-500 font-medium">15 May 2020 9:00 pm</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="px-2.5 py-1 text-sm font-medium text-green-500 bg-green-500 bg-opacity-10 rounded-full">Confirmed</span></td>
                            <td class="py-2.5 border-b border-neutral-100"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                          <tr>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100">
                              <div class="flex flex-wrap items-center"><img class="mr-3 h-9" src="images/avatar6.png" alt=""/><span class="font-semibold">Bessie Cooper</span></div>
                            </td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">$17.84</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">Gopro Hero 7</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="text-neutral-500 font-medium">15 May 2020 8:00 pm</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="px-2.5 py-1 text-sm font-medium text-red-500 bg-red-500 bg-opacity-10 rounded-full">Canceled</span></td>
                            <td class="py-2.5 border-b border-neutral-100"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                          <tr>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100">
                              <div class="flex flex-wrap items-center"><img class="mr-3 h-9" src="images/avatar7.png" alt=""/><span class="font-semibold">Annette Black</span></div>
                            </td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">$6.48</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">DJI Mavic Pro 2</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="text-neutral-500 font-medium">15 May 2020 7:00 pm</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="px-2.5 py-1 text-sm font-medium text-green-500 bg-green-500 bg-opacity-10 rounded-full">Confirmed</span></td>
                            <td class="py-2.5 border-b border-neutral-100"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                          <tr>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100">
                              <div class="flex flex-wrap items-center pl-12"><span class="font-semibold">Darlene Robertson</span></div>
                            </td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">$14.81</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">Brand New Bike</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="text-neutral-500 font-medium">15 May 2020 6:00 pm</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="px-2.5 py-1 text-sm font-medium text-green-500 bg-green-500 bg-opacity-10 rounded-full">Confirmed</span></td>
                            <td class="py-2.5 border-b border-neutral-100"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                          <tr>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100">
                              <div class="flex flex-wrap items-center"><img class="mr-3 h-9" src="images/avatar8.png" alt=""/><span class="font-semibold">Jane Cooper</span></div>
                            </td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">$8.99</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">Coach Tabby 26</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="text-neutral-500 font-medium">15 May 2020 11:00 pm</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="px-2.5 py-1 text-sm font-medium text-yellow-500 bg-yellow-500 bg-opacity-10 rounded-full">Pending</span></td>
                            <td class="py-2.5 border-b border-neutral-100"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                          <tr>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100">
                              <div class="flex flex-wrap items-center"><img class="mr-3 h-9" src="images/avatar9.png" alt=""/><span class="font-semibold">Cameron Williamson</span></div>
                            </td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">$17.84</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="font-medium">Dell Computer Monitor</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="text-neutral-500 font-medium">15 May 2020 5:00 pm</span></td>
                            <td class="py-2.5 pr-4 border-b border-neutral-100"><span class="px-2.5 py-1 text-sm font-medium text-green-500 bg-green-500 bg-opacity-10 rounded-full">Confirmed</span></td>
                            <td class="py-2.5 border-b border-neutral-100"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                          <tr>
                            <td class="py-2.5 pr-4"><span class="font-medium">29506</span></td>
                            <td class="py-2.5 pr-4">
                              <div class="flex flex-wrap items-center"><img class="mr-3 h-9" src="images/avatar10.png" alt=""/><span class="font-semibold">Esther Howard</span></div>
                            </td>
                            <td class="py-2.5 pr-4"><span class="font-medium">$5.22</span></td>
                            <td class="py-2.5 pr-4"><span class="font-medium">iPad Pro 2017 Model</span></td>
                            <td class="py-2.5 pr-4"><span class="text-neutral-500 font-medium">15 May 2020 10:00 pm</span></td>
                            <td class="py-2.5 pr-4"><span class="px-2.5 py-1 text-sm font-medium text-green-500 bg-green-500 bg-opacity-10 rounded-full">Confirmed</span></td>
                            <td class="py-2.5"><a class="inline-flex py-2.5 pr-0" href="#"><span class="w-1 h-1 bg-neutral-200 rounded-full"></span><span class="mx-0.5 w-1 h-1 bg-neutral-200 rounded-full"></span><span class="w-1 h-1 bg-neutral-200 rounded-full"></span></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="flex flex-wrap items-center justify-between -m-2">
                      <div class="w-auto p-2">
                        <div class="flex flex-wrap -m-0.5">
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border hover:border-neutral-300 rounded-sm" href="#">
                              <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 10.6666L1.33333 5.99998L6 1.33331" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg></a></div>
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border hover:border-neutral-300 rounded-sm" href="#"><span class="text-sm text-neutral-400 font-semibold">1</span></a></div>
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border border-neutral-600 rounded-sm" href="#"><span class="text-sm font-semibold">2</span></a></div>
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border hover:border-neutral-300 rounded-sm" href="#"><span class="text-sm text-neutral-400 font-semibold">3</span></a></div>
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border hover:border-neutral-300 rounded-sm" href="#"><span class="text-sm text-neutral-400 font-semibold">4</span></a></div>
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border hover:border-neutral-300 rounded-sm" href="#">
                              <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.33335L5.66667 6.00002L1 10.6667" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg></a></div>
                          <div class="w-auto p-0.5"><a class="flex items-center justify-center w-9 h-9 border hover:border-neutral-300 rounded-sm" href="#">
                              <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.33335L5.66667 6.00002L1 10.6667" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.33335L5.66667 6.00002L1 10.6667" stroke="#71717A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg></a></div>
                        </div>
                      </div>
                      <div class="w-auto p-2">
                        <p class="text-sm text-neutral-400">Showing 1 of 20 out of 157 results</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="p-6 bg-white border rounded-xl">
                  <div class="flex flex-wrap justify-between mb-5 -m-2">
                    <div class="w-auto p-2">
                      <h3 class="font-heading text-lg font-semibold">Integrate 100+ Apps</h3>
                    </div>
                    <div class="w-auto p-2"><a class="text-xs text-transparent font-semibold uppercase bg-clip-text bg-gradient-purple-left" href="#">View all</a></div>
                  </div>
                  <div class="flex flex-wrap -m-2">
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/wordpress.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">WordPress</h3>
                                <p class="text-xs text-neutral-500">CMS</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/zapier.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">Zapier</h3>
                                <p class="text-xs text-neutral-500">Automation</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/woocommerce.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">WooCommerce</h3>
                                <p class="text-xs text-neutral-500">eCommerce Plugin</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/slack.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">Slack</h3>
                                <p class="text-xs text-neutral-500">Communication</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/notion.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">Notion</h3>
                                <p class="text-xs text-neutral-500">Writing Tool</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/google-drive.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">Google Drive</h3>
                                <p class="text-xs text-neutral-500">Cloud</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/jetpack.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">Jetpack</h3>
                                <p class="text-xs text-neutral-500">Plugins</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/linkedin.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">Linkedin</h3>
                                <p class="text-xs text-neutral-500">Social Media</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 p-2">
                      <div class="p-4 h-full bg-white border hover:border-neutral-200 rounded-lg cursor-pointer">
                        <div class="flex flex-wrap items-center justify-between -m-2">
                          <div class="w-auto p-2">
                            <div class="flex flex-wrap items-center -m-1.5">
                              <div class="w-auto p-1.5"><img src="images/tiktok.svg" alt=""/></div>
                              <div class="flex-1 p-1.5">
                                <h3 class="font-heading mb-0.5 font-semibold">TikTok</h3>
                                <p class="text-xs text-neutral-500">CMS</p>
                              </div>
                            </div>
                          </div>
                          <div class="w-auto p-2"><a class="inline-flex flex-wrap items-center justify-center px-1.5 py-1.5 w-full font-medium text-sm text-center text-neutral-50 hover:text-neutral-100 bg-neutral-600 hover:bg-opacity-95 rounded-lg focus:ring-4 focus:ring-neutral-400" href="#">
                              <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35937 4C9.35937 3.58579 9.02359 3.25 8.60937 3.25C8.19516 3.25 7.85937 3.58579 7.85937 4H9.35937ZM7.85937 12C7.85937 12.4142 8.19516 12.75 8.60937 12.75C9.02359 12.75 9.35937 12.4142 9.35937 12H7.85937ZM12.6094 8.75C13.0236 8.75 13.3594 8.41421 13.3594 8C13.3594 7.58579 13.0236 7.25 12.6094 7.25V8.75ZM4.60938 7.25C4.19516 7.25 3.85938 7.58579 3.85938 8C3.85937 8.41421 4.19516 8.75 4.60937 8.75L4.60938 7.25ZM7.85937 4V8H9.35937V4H7.85937ZM7.85937 8V12H9.35937V8H7.85937ZM12.6094 7.25H8.60937V8.75H12.6094V7.25ZM8.60937 7.25L4.60938 7.25L4.60937 8.75H8.60937L8.60937 7.25Z" fill="#F9FAFB"></path>
                              </svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="relative pt-6 px-8 pb-7 bg-neutral-600 rounded-xl"><img class="absolute -right-px -top-px" src="images/elipse-gradient2.svg" alt=""/><img class="absolute -right-px -bottom-px" src="images/elipse-gradient.svg" alt=""/>
                  <div class="relative z-10">
                    <h3 class="mb-1.5 text-xl text-white font-semibold">How can Base improve team insights for you? </h3>
                    <p class="mb-9 text-neutral-300">We’re working on improvements to team insights and would love your feedback</p><a class="inline-flex flex-wrap items-center px-5 py-3.5 text-sm text-neutral-50 font-medium bg-gradient-purple-left hover:bg-gradient-purple-left-dark rounded-lg transition duration-300" href="#">Share your feedback</a>
                  </div>
                </div>
              </div>
            </section>
            <section class="py-4 overflow-hidden">
              <div class="container px-4 mx-auto">
                <div class="flex flex-wrap -m-3">
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="text-center bg-white border rounded-xl">
                      <div class="p-5 pb-9"><img class="h-16 mx-auto mb-3.5" src="images/avatar31.png" alt=""/>
                        <h3 class="font-semibold text-sm">Jenny Wilson</h3>
                        <p class="text-xs text-neutral-500">Co-Founder</p>
                      </div>
                      <div class="flex flex-wrap border-t divide-x">
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.66603 2.70934C1.32138 2.47957 0.855727 2.5727 0.625962 2.91735C0.396198 3.262 0.489328 3.72765 0.833975 3.95741L1.66603 2.70934ZM6.5104 6.84031L6.09437 7.46434H6.09438L6.5104 6.84031ZM7.9896 6.84031L7.57358 6.21627V6.21627L7.9896 6.84031ZM13.666 3.95741C14.0107 3.72765 14.1038 3.262 13.874 2.91735C13.6443 2.5727 13.1786 2.47957 12.834 2.70934L13.666 3.95741ZM2.58333 2.08337H11.9167V0.583374H2.58333V2.08337ZM12.5 2.66671V9.33337H14V2.66671H12.5ZM11.9167 9.91671H2.58333V11.4167H11.9167V9.91671ZM2 9.33337V2.66671H0.5V9.33337H2ZM2.58333 9.91671C2.26117 9.91671 2 9.65554 2 9.33337H0.5C0.5 10.484 1.43274 11.4167 2.58333 11.4167V9.91671ZM12.5 9.33337C12.5 9.65554 12.2388 9.91671 11.9167 9.91671V11.4167C13.0673 11.4167 14 10.484 14 9.33337H12.5ZM11.9167 2.08337C12.2388 2.08337 12.5 2.34454 12.5 2.66671H14C14 1.51611 13.0673 0.583374 11.9167 0.583374V2.08337ZM2.58333 0.583374C1.43274 0.583374 0.5 1.51611 0.5 2.66671H2C2 2.34454 2.26117 2.08337 2.58333 2.08337V0.583374ZM0.833975 3.95741L6.09437 7.46434L6.92642 6.21627L1.66603 2.70934L0.833975 3.95741ZM8.40563 7.46434L13.666 3.95741L12.834 2.70934L7.57358 6.21627L8.40563 7.46434ZM6.09438 7.46434C6.79417 7.93087 7.70584 7.93087 8.40563 7.46434L7.57358 6.21627C7.37763 6.3469 7.12237 6.3469 6.92642 6.21627L6.09438 7.46434Z" fill="#B8C1CC"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Email</span></a></div>
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.25 3.33333C2.25 2.59695 2.84695 2 3.58333 2H5.76949C6.05645 2 6.31121 2.18362 6.40195 2.45585L7.40049 5.45147C7.50541 5.76622 7.36292 6.11021 7.06618 6.25858L5.56134 7.011C6.29617 8.64081 7.60919 9.95383 9.239 10.6887L9.99142 9.18382C10.1398 8.88708 10.4838 8.74459 10.7985 8.84951L13.7942 9.84805C14.0664 9.93879 14.25 10.1936 14.25 10.4805V12.6667C14.25 13.403 13.653 14 12.9167 14H12.25C6.72715 14 2.25 9.52285 2.25 4V3.33333Z" stroke="#B8C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Call</span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="text-center bg-white border rounded-xl">
                      <div class="p-5 pb-9"><img class="h-16 mx-auto mb-3.5" src="images/avatar32.png" alt=""/>
                        <h3 class="font-semibold text-sm">Darrell Steward</h3>
                        <p class="text-xs text-neutral-500">Product Designer</p>
                      </div>
                      <div class="flex flex-wrap border-t divide-x">
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.66603 2.70934C1.32138 2.47957 0.855727 2.5727 0.625962 2.91735C0.396198 3.262 0.489328 3.72765 0.833975 3.95741L1.66603 2.70934ZM6.5104 6.84031L6.09437 7.46434H6.09438L6.5104 6.84031ZM7.9896 6.84031L7.57358 6.21627V6.21627L7.9896 6.84031ZM13.666 3.95741C14.0107 3.72765 14.1038 3.262 13.874 2.91735C13.6443 2.5727 13.1786 2.47957 12.834 2.70934L13.666 3.95741ZM2.58333 2.08337H11.9167V0.583374H2.58333V2.08337ZM12.5 2.66671V9.33337H14V2.66671H12.5ZM11.9167 9.91671H2.58333V11.4167H11.9167V9.91671ZM2 9.33337V2.66671H0.5V9.33337H2ZM2.58333 9.91671C2.26117 9.91671 2 9.65554 2 9.33337H0.5C0.5 10.484 1.43274 11.4167 2.58333 11.4167V9.91671ZM12.5 9.33337C12.5 9.65554 12.2388 9.91671 11.9167 9.91671V11.4167C13.0673 11.4167 14 10.484 14 9.33337H12.5ZM11.9167 2.08337C12.2388 2.08337 12.5 2.34454 12.5 2.66671H14C14 1.51611 13.0673 0.583374 11.9167 0.583374V2.08337ZM2.58333 0.583374C1.43274 0.583374 0.5 1.51611 0.5 2.66671H2C2 2.34454 2.26117 2.08337 2.58333 2.08337V0.583374ZM0.833975 3.95741L6.09437 7.46434L6.92642 6.21627L1.66603 2.70934L0.833975 3.95741ZM8.40563 7.46434L13.666 3.95741L12.834 2.70934L7.57358 6.21627L8.40563 7.46434ZM6.09438 7.46434C6.79417 7.93087 7.70584 7.93087 8.40563 7.46434L7.57358 6.21627C7.37763 6.3469 7.12237 6.3469 6.92642 6.21627L6.09438 7.46434Z" fill="#B8C1CC"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Email</span></a></div>
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.25 3.33333C2.25 2.59695 2.84695 2 3.58333 2H5.76949C6.05645 2 6.31121 2.18362 6.40195 2.45585L7.40049 5.45147C7.50541 5.76622 7.36292 6.11021 7.06618 6.25858L5.56134 7.011C6.29617 8.64081 7.60919 9.95383 9.239 10.6887L9.99142 9.18382C10.1398 8.88708 10.4838 8.74459 10.7985 8.84951L13.7942 9.84805C14.0664 9.93879 14.25 10.1936 14.25 10.4805V12.6667C14.25 13.403 13.653 14 12.9167 14H12.25C6.72715 14 2.25 9.52285 2.25 4V3.33333Z" stroke="#B8C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Call</span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="text-center bg-white border rounded-xl">
                      <div class="p-5 pb-9"><img class="h-16 mx-auto mb-3.5" src="images/avatar33.png" alt=""/>
                        <h3 class="font-semibold text-sm">Jerome Bell</h3>
                        <p class="text-xs text-neutral-500">Full-Stack Developer</p>
                      </div>
                      <div class="flex flex-wrap border-t divide-x">
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.66603 2.70934C1.32138 2.47957 0.855727 2.5727 0.625962 2.91735C0.396198 3.262 0.489328 3.72765 0.833975 3.95741L1.66603 2.70934ZM6.5104 6.84031L6.09437 7.46434H6.09438L6.5104 6.84031ZM7.9896 6.84031L7.57358 6.21627V6.21627L7.9896 6.84031ZM13.666 3.95741C14.0107 3.72765 14.1038 3.262 13.874 2.91735C13.6443 2.5727 13.1786 2.47957 12.834 2.70934L13.666 3.95741ZM2.58333 2.08337H11.9167V0.583374H2.58333V2.08337ZM12.5 2.66671V9.33337H14V2.66671H12.5ZM11.9167 9.91671H2.58333V11.4167H11.9167V9.91671ZM2 9.33337V2.66671H0.5V9.33337H2ZM2.58333 9.91671C2.26117 9.91671 2 9.65554 2 9.33337H0.5C0.5 10.484 1.43274 11.4167 2.58333 11.4167V9.91671ZM12.5 9.33337C12.5 9.65554 12.2388 9.91671 11.9167 9.91671V11.4167C13.0673 11.4167 14 10.484 14 9.33337H12.5ZM11.9167 2.08337C12.2388 2.08337 12.5 2.34454 12.5 2.66671H14C14 1.51611 13.0673 0.583374 11.9167 0.583374V2.08337ZM2.58333 0.583374C1.43274 0.583374 0.5 1.51611 0.5 2.66671H2C2 2.34454 2.26117 2.08337 2.58333 2.08337V0.583374ZM0.833975 3.95741L6.09437 7.46434L6.92642 6.21627L1.66603 2.70934L0.833975 3.95741ZM8.40563 7.46434L13.666 3.95741L12.834 2.70934L7.57358 6.21627L8.40563 7.46434ZM6.09438 7.46434C6.79417 7.93087 7.70584 7.93087 8.40563 7.46434L7.57358 6.21627C7.37763 6.3469 7.12237 6.3469 6.92642 6.21627L6.09438 7.46434Z" fill="#B8C1CC"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Email</span></a></div>
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.25 3.33333C2.25 2.59695 2.84695 2 3.58333 2H5.76949C6.05645 2 6.31121 2.18362 6.40195 2.45585L7.40049 5.45147C7.50541 5.76622 7.36292 6.11021 7.06618 6.25858L5.56134 7.011C6.29617 8.64081 7.60919 9.95383 9.239 10.6887L9.99142 9.18382C10.1398 8.88708 10.4838 8.74459 10.7985 8.84951L13.7942 9.84805C14.0664 9.93879 14.25 10.1936 14.25 10.4805V12.6667C14.25 13.403 13.653 14 12.9167 14H12.25C6.72715 14 2.25 9.52285 2.25 4V3.33333Z" stroke="#B8C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Call</span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="text-center bg-white border rounded-xl">
                      <div class="p-5 pb-9"><img class="h-16 mx-auto mb-3.5" src="images/avatar34.png" alt=""/>
                        <h3 class="font-semibold text-sm">Marvin McKinney</h3>
                        <p class="text-xs text-neutral-500">Head of Customer Relation</p>
                      </div>
                      <div class="flex flex-wrap border-t divide-x">
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.66603 2.70934C1.32138 2.47957 0.855727 2.5727 0.625962 2.91735C0.396198 3.262 0.489328 3.72765 0.833975 3.95741L1.66603 2.70934ZM6.5104 6.84031L6.09437 7.46434H6.09438L6.5104 6.84031ZM7.9896 6.84031L7.57358 6.21627V6.21627L7.9896 6.84031ZM13.666 3.95741C14.0107 3.72765 14.1038 3.262 13.874 2.91735C13.6443 2.5727 13.1786 2.47957 12.834 2.70934L13.666 3.95741ZM2.58333 2.08337H11.9167V0.583374H2.58333V2.08337ZM12.5 2.66671V9.33337H14V2.66671H12.5ZM11.9167 9.91671H2.58333V11.4167H11.9167V9.91671ZM2 9.33337V2.66671H0.5V9.33337H2ZM2.58333 9.91671C2.26117 9.91671 2 9.65554 2 9.33337H0.5C0.5 10.484 1.43274 11.4167 2.58333 11.4167V9.91671ZM12.5 9.33337C12.5 9.65554 12.2388 9.91671 11.9167 9.91671V11.4167C13.0673 11.4167 14 10.484 14 9.33337H12.5ZM11.9167 2.08337C12.2388 2.08337 12.5 2.34454 12.5 2.66671H14C14 1.51611 13.0673 0.583374 11.9167 0.583374V2.08337ZM2.58333 0.583374C1.43274 0.583374 0.5 1.51611 0.5 2.66671H2C2 2.34454 2.26117 2.08337 2.58333 2.08337V0.583374ZM0.833975 3.95741L6.09437 7.46434L6.92642 6.21627L1.66603 2.70934L0.833975 3.95741ZM8.40563 7.46434L13.666 3.95741L12.834 2.70934L7.57358 6.21627L8.40563 7.46434ZM6.09438 7.46434C6.79417 7.93087 7.70584 7.93087 8.40563 7.46434L7.57358 6.21627C7.37763 6.3469 7.12237 6.3469 6.92642 6.21627L6.09438 7.46434Z" fill="#B8C1CC"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Email</span></a></div>
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.25 3.33333C2.25 2.59695 2.84695 2 3.58333 2H5.76949C6.05645 2 6.31121 2.18362 6.40195 2.45585L7.40049 5.45147C7.50541 5.76622 7.36292 6.11021 7.06618 6.25858L5.56134 7.011C6.29617 8.64081 7.60919 9.95383 9.239 10.6887L9.99142 9.18382C10.1398 8.88708 10.4838 8.74459 10.7985 8.84951L13.7942 9.84805C14.0664 9.93879 14.25 10.1936 14.25 10.4805V12.6667C14.25 13.403 13.653 14 12.9167 14H12.25C6.72715 14 2.25 9.52285 2.25 4V3.33333Z" stroke="#B8C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Call</span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="text-center bg-white border rounded-xl">
                      <div class="p-5 pb-9"><img class="h-16 mx-auto mb-3.5" src="images/avatar35.png" alt=""/>
                        <h3 class="font-semibold text-sm">Eleanor Pena</h3>
                        <p class="text-xs text-neutral-500">Chief Marketing Officer</p>
                      </div>
                      <div class="flex flex-wrap border-t divide-x">
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.66603 2.70934C1.32138 2.47957 0.855727 2.5727 0.625962 2.91735C0.396198 3.262 0.489328 3.72765 0.833975 3.95741L1.66603 2.70934ZM6.5104 6.84031L6.09437 7.46434H6.09438L6.5104 6.84031ZM7.9896 6.84031L7.57358 6.21627V6.21627L7.9896 6.84031ZM13.666 3.95741C14.0107 3.72765 14.1038 3.262 13.874 2.91735C13.6443 2.5727 13.1786 2.47957 12.834 2.70934L13.666 3.95741ZM2.58333 2.08337H11.9167V0.583374H2.58333V2.08337ZM12.5 2.66671V9.33337H14V2.66671H12.5ZM11.9167 9.91671H2.58333V11.4167H11.9167V9.91671ZM2 9.33337V2.66671H0.5V9.33337H2ZM2.58333 9.91671C2.26117 9.91671 2 9.65554 2 9.33337H0.5C0.5 10.484 1.43274 11.4167 2.58333 11.4167V9.91671ZM12.5 9.33337C12.5 9.65554 12.2388 9.91671 11.9167 9.91671V11.4167C13.0673 11.4167 14 10.484 14 9.33337H12.5ZM11.9167 2.08337C12.2388 2.08337 12.5 2.34454 12.5 2.66671H14C14 1.51611 13.0673 0.583374 11.9167 0.583374V2.08337ZM2.58333 0.583374C1.43274 0.583374 0.5 1.51611 0.5 2.66671H2C2 2.34454 2.26117 2.08337 2.58333 2.08337V0.583374ZM0.833975 3.95741L6.09437 7.46434L6.92642 6.21627L1.66603 2.70934L0.833975 3.95741ZM8.40563 7.46434L13.666 3.95741L12.834 2.70934L7.57358 6.21627L8.40563 7.46434ZM6.09438 7.46434C6.79417 7.93087 7.70584 7.93087 8.40563 7.46434L7.57358 6.21627C7.37763 6.3469 7.12237 6.3469 6.92642 6.21627L6.09438 7.46434Z" fill="#B8C1CC"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Email</span></a></div>
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.25 3.33333C2.25 2.59695 2.84695 2 3.58333 2H5.76949C6.05645 2 6.31121 2.18362 6.40195 2.45585L7.40049 5.45147C7.50541 5.76622 7.36292 6.11021 7.06618 6.25858L5.56134 7.011C6.29617 8.64081 7.60919 9.95383 9.239 10.6887L9.99142 9.18382C10.1398 8.88708 10.4838 8.74459 10.7985 8.84951L13.7942 9.84805C14.0664 9.93879 14.25 10.1936 14.25 10.4805V12.6667C14.25 13.403 13.653 14 12.9167 14H12.25C6.72715 14 2.25 9.52285 2.25 4V3.33333Z" stroke="#B8C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Call</span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-1/3 p-3">
                    <div class="text-center bg-white border rounded-xl">
                      <div class="p-5 pb-9"><img class="h-16 mx-auto mb-3.5" src="images/avatar36.png" alt=""/>
                        <h3 class="font-semibold text-sm">Kristin Watson</h3>
                        <p class="text-xs text-neutral-500">3D Designer</p>
                      </div>
                      <div class="flex flex-wrap border-t divide-x">
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.66603 2.70934C1.32138 2.47957 0.855727 2.5727 0.625962 2.91735C0.396198 3.262 0.489328 3.72765 0.833975 3.95741L1.66603 2.70934ZM6.5104 6.84031L6.09437 7.46434H6.09438L6.5104 6.84031ZM7.9896 6.84031L7.57358 6.21627V6.21627L7.9896 6.84031ZM13.666 3.95741C14.0107 3.72765 14.1038 3.262 13.874 2.91735C13.6443 2.5727 13.1786 2.47957 12.834 2.70934L13.666 3.95741ZM2.58333 2.08337H11.9167V0.583374H2.58333V2.08337ZM12.5 2.66671V9.33337H14V2.66671H12.5ZM11.9167 9.91671H2.58333V11.4167H11.9167V9.91671ZM2 9.33337V2.66671H0.5V9.33337H2ZM2.58333 9.91671C2.26117 9.91671 2 9.65554 2 9.33337H0.5C0.5 10.484 1.43274 11.4167 2.58333 11.4167V9.91671ZM12.5 9.33337C12.5 9.65554 12.2388 9.91671 11.9167 9.91671V11.4167C13.0673 11.4167 14 10.484 14 9.33337H12.5ZM11.9167 2.08337C12.2388 2.08337 12.5 2.34454 12.5 2.66671H14C14 1.51611 13.0673 0.583374 11.9167 0.583374V2.08337ZM2.58333 0.583374C1.43274 0.583374 0.5 1.51611 0.5 2.66671H2C2 2.34454 2.26117 2.08337 2.58333 2.08337V0.583374ZM0.833975 3.95741L6.09437 7.46434L6.92642 6.21627L1.66603 2.70934L0.833975 3.95741ZM8.40563 7.46434L13.666 3.95741L12.834 2.70934L7.57358 6.21627L8.40563 7.46434ZM6.09438 7.46434C6.79417 7.93087 7.70584 7.93087 8.40563 7.46434L7.57358 6.21627C7.37763 6.3469 7.12237 6.3469 6.92642 6.21627L6.09438 7.46434Z" fill="#B8C1CC"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Email</span></a></div>
                        <div class="w-full sm:w-1/2"><a class="flex items-center justify-center py-3" href="#">
                            <svg class="mr-3" width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.25 3.33333C2.25 2.59695 2.84695 2 3.58333 2H5.76949C6.05645 2 6.31121 2.18362 6.40195 2.45585L7.40049 5.45147C7.50541 5.76622 7.36292 6.11021 7.06618 6.25858L5.56134 7.011C6.29617 8.64081 7.60919 9.95383 9.239 10.6887L9.99142 9.18382C10.1398 8.88708 10.4838 8.74459 10.7985 8.84951L13.7942 9.84805C14.0664 9.93879 14.25 10.1936 14.25 10.4805V12.6667C14.25 13.403 13.653 14 12.9167 14H12.25C6.72715 14 2.25 9.52285 2.25 4V3.33333Z" stroke="#B8C1CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg><span class="text-xs font-medium hover:text-neutral-700">Call</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('assets/js/charts-demo.js')}}"></script>
  </body>
</html>
