<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.nav-link').on('click', function() {
            $('.nav-item').removeClass('active'); // Remove active class from all nav items
            $(this).parent().addClass('active'); // Add active class to the clicked nav item
        });
    });
</script>


<ul class="navbar-nav   sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #F4F5F9;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center  bg-light text-primary" href="./index.php">
        <div class="sidebar-brand-icon  ">
            <!-- <i class="fas fa-stethoscope"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">LOGO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">




    <!-- Nav Item - Dashboard -->
    <li class="nav-item active li_tag">
        <a class="nav-link  collapsed anc_tag " href="index.php">
            <p class="p_tag">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none" class="icon_tag  mr-3">
                    <g clip-path="url(#clip0_28_274)">
                        <path d="M10.725 18.15H3.97498C2.114 18.15 0.599976 19.664 0.599976 21.525V26.025C0.599976 27.886 2.114 29.4 3.97498 29.4H10.725C12.5859 29.4 14.1 27.886 14.1 26.025V21.525C14.1 19.664 12.5859 18.15 10.725 18.15ZM11.85 26.025C11.85 26.6453 11.3453 27.15 10.725 27.15H3.97498C3.35465 27.15 2.84998 26.6453 2.84998 26.025V21.525C2.84998 20.9046 3.35465 20.4 3.97498 20.4H10.725C11.3453 20.4 11.85 20.9046 11.85 21.525V26.025ZM26.025 0.599976H19.275C17.414 0.599976 15.9 2.114 15.9 3.97498V8.47498C15.9 10.3359 17.414 11.85 19.275 11.85H26.025C27.886 11.85 29.4 10.3359 29.4 8.47498V3.97498C29.4 2.114 27.886 0.599976 26.025 0.599976ZM27.15 8.47498C27.15 9.0953 26.6453 9.59998 26.025 9.59998H19.275C18.6546 9.59998 18.15 9.0953 18.15 8.47498V3.97498C18.15 3.35465 18.6546 2.84998 19.275 2.84998H26.025C26.6453 2.84998 27.15 3.35465 27.15 3.97498V8.47498ZM26.025 13.65H19.275C17.414 13.65 15.9 15.164 15.9 17.025V26.025C15.9 27.886 17.414 29.4 19.275 29.4H26.025C27.886 29.4 29.4 27.886 29.4 26.025V17.025C29.4 15.164 27.886 13.65 26.025 13.65ZM27.15 26.025C27.15 26.6453 26.6453 27.15 26.025 27.15H19.275C18.6546 27.15 18.15 26.6453 18.15 26.025V17.025C18.15 16.4046 18.6546 15.9 19.275 15.9H26.025C26.6453 15.9 27.15 16.4046 27.15 17.025V26.025ZM10.725 0.599976H3.97498C2.114 0.599976 0.599976 2.114 0.599976 3.97498V12.975C0.599976 14.8359 2.114 16.35 3.97498 16.35H10.725C12.5859 16.35 14.1 14.8359 14.1 12.975V3.97498C14.1 2.114 12.5859 0.599976 10.725 0.599976ZM11.85 12.975C11.85 13.5953 11.3453 14.1 10.725 14.1H3.97498C3.35465 14.1 2.84998 13.5953 2.84998 12.975V3.97498C2.84998 3.35465 3.35465 2.84998 3.97498 2.84998H10.725C11.3453 2.84998 11.85 3.35465 11.85 3.97498V12.975Z" fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_28_274">
                            <rect width="28.8" height="28.8" fill="white" transform="translate(0.599976 0.599976)" />
                        </clipPath>
                    </defs>
                </svg>
                Dashboard
            </p>
        </a>
    </li>

    <li class="nav-item    li_tag">
        <a class="nav-link collapsed anc_tag" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <p class="p_tag"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 33 33" fill="none" class="icon_tag  mr-3">
                    <path d="M17.3266 9.05676H9.22661C8.95808 9.05676 8.70055 9.16344 8.51067 9.35332C8.32079 9.5432 8.21411 9.80073 8.21411 10.0693C8.21411 10.3378 8.32079 10.5953 8.51067 10.7852C8.70055 10.9751 8.95808 11.0818 9.22661 11.0818H17.3266C17.5951 11.0818 17.8527 10.9751 18.0426 10.7852C18.2324 10.5953 18.3391 10.3378 18.3391 10.0693C18.3391 9.80073 18.2324 9.5432 18.0426 9.35332C17.8527 9.16344 17.5951 9.05676 17.3266 9.05676Z" fill="black" />
                    <path d="M17.3266 14.4738H9.22661C8.95808 14.4738 8.70055 14.5804 8.51067 14.7703C8.32079 14.9602 8.21411 15.2177 8.21411 15.4863C8.21411 15.7548 8.32079 16.0123 8.51067 16.2022C8.70055 16.3921 8.95808 16.4988 9.22661 16.4988H17.3266C17.5951 16.4988 17.8527 16.3921 18.0426 16.2022C18.2324 16.0123 18.3391 15.7548 18.3391 15.4863C18.3391 15.2177 18.2324 14.9602 18.0426 14.7703C17.8527 14.5804 17.5951 14.4738 17.3266 14.4738Z" fill="black" />
                    <path d="M17.3266 20.0121H9.22661C8.95808 20.0121 8.70055 20.1188 8.51067 20.3086C8.32079 20.4985 8.21411 20.7561 8.21411 21.0246C8.21411 21.2931 8.32079 21.5506 8.51067 21.7405C8.70055 21.9304 8.95808 22.0371 9.22661 22.0371H17.3266C17.5951 22.0371 17.8527 21.9304 18.0426 21.7405C18.2324 21.5506 18.3391 21.2931 18.3391 21.0246C18.3391 20.7561 18.2324 20.4985 18.0426 20.3086C17.8527 20.1188 17.5951 20.0121 17.3266 20.0121Z" fill="black" />
                    <path d="M26.7934 1.41248H6.8066C6.28718 1.4138 5.77314 1.51759 5.2939 1.71789C4.81466 1.9182 4.37965 2.21108 4.01378 2.57977C3.64791 2.94846 3.35837 3.38571 3.16176 3.86647C2.96514 4.34724 2.86531 4.86207 2.86797 5.38148V30.0763C2.86731 30.3298 2.93411 30.5788 3.06152 30.7978C3.18892 31.0169 3.37234 31.1981 3.59293 31.3228C3.81352 31.4475 4.06333 31.5113 4.31672 31.5075C4.5701 31.5038 4.81792 31.4327 5.03472 31.3015L8.76072 29.0638C8.81693 29.0288 8.88182 29.0103 8.94803 29.0103C9.01425 29.0103 9.07914 29.0288 9.13535 29.0638L13.2765 31.5445C13.4943 31.6833 13.7472 31.7571 14.0055 31.7571C14.2654 31.7557 14.5203 31.6859 14.7446 31.5546L18.906 29.0638C18.9622 29.0288 19.0271 29.0103 19.0933 29.0103C19.1595 29.0103 19.2244 29.0288 19.2806 29.0638L22.9863 31.3015C23.2039 31.4307 23.4522 31.4989 23.7052 31.4989C23.9582 31.4989 24.2066 31.4307 24.4241 31.3015C24.6419 31.1769 24.823 30.9971 24.9492 30.7803C25.0754 30.5634 25.1423 30.3171 25.143 30.0662V12.9955H28.3222C28.9605 12.9928 29.5719 12.7381 30.0232 12.2867C30.4746 11.8354 30.7293 11.224 30.732 10.5857V5.38148C30.7346 4.86207 30.6348 4.34724 30.4382 3.86647C30.2416 3.38571 29.952 2.94846 29.5862 2.57977C29.2203 2.21108 28.7853 1.9182 28.306 1.71789C27.8268 1.51759 27.3128 1.4138 26.7934 1.41248ZM23.118 29.0132L20.3235 27.3325C19.9512 27.1115 19.5262 26.9948 19.0933 26.9948C18.6603 26.9948 18.2354 27.1115 17.8631 27.3325L14.0156 29.641L10.1782 27.3223C9.80151 27.097 9.3704 26.9789 8.93144 26.9806C8.49248 26.9824 8.06234 27.1041 7.68747 27.3325L4.89297 29.0233V5.38148C4.88894 5.12763 4.93546 4.87552 5.02983 4.63983C5.12419 4.40414 5.26451 4.18959 5.44261 4.00866C5.62071 3.82773 5.83303 3.68405 6.0672 3.58599C6.30137 3.48793 6.55272 3.43744 6.8066 3.43748H23.5331C23.2657 3.94686 23.1234 4.51258 23.118 5.08785V28.9828V29.0132ZM28.707 10.5857C28.707 10.6878 28.6664 10.7856 28.5943 10.8578C28.5221 10.9299 28.4243 10.9705 28.3222 10.9705H25.143V5.11823C25.1389 4.89895 25.1786 4.68107 25.2598 4.47732C25.3409 4.27357 25.4618 4.08803 25.6155 3.93155C25.7691 3.77507 25.9524 3.65078 26.1547 3.56594C26.3569 3.48111 26.574 3.43744 26.7934 3.43748C27.3009 3.43748 27.7876 3.63909 28.1465 3.99796C28.5054 4.35684 28.707 4.84358 28.707 5.3511V10.5857Z" fill="black" />
                </svg>
                Billings</p>
        </a>

    </li>

    <li class="nav-item   li_tag">
        <a class="nav-link collapsed anc_tag" href="index.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <p class="p_tag"> <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 37 37" fill="none" class="icon_tag  mr-3">
                    <path d="M14.1001 18.8C17.2051 18.8 19.7251 16.28 19.7251 13.175C19.7251 10.07 17.2051 7.55005 14.1001 7.55005C10.9951 7.55005 8.4751 10.07 8.4751 13.175C8.4751 16.28 10.9951 18.8 14.1001 18.8ZM14.1001 9.80005C15.9563 9.80005 17.4751 11.3188 17.4751 13.175C17.4751 15.0313 15.9563 16.55 14.1001 16.55C12.2438 16.55 10.7251 15.0313 10.7251 13.175C10.7251 11.3188 12.2438 9.80005 14.1001 9.80005Z" fill="black" />
                    <path d="M23.7975 24.2C22.7175 20.8363 19.095 19.5088 18.0712 20.06C16.53 20.8813 15.0675 21.05 14.1 21.05C12.3562 21.05 10.9837 20.51 10.1287 20.06C9.16125 19.5425 5.51625 20.7125 4.39125 24.2675L2.94 29.9038C2.72625 30.7138 2.90625 31.5688 3.435 32.2438C4.00875 32.9863 4.93125 33.425 5.91 33.425H22.3013C23.28 33.425 24.2025 32.9863 24.7762 32.2438C25.305 31.5688 25.485 30.7138 25.2712 29.9038L23.7975 24.2ZM22.3013 31.175H5.91C5.47125 31.175 5.02125 30.86 5.1225 30.455L6.55125 24.875C6.9675 23.5588 8.025 22.535 9.43125 22.22C10.5225 22.7488 12.1312 23.3 14.1 23.3C15.2475 23.3 16.9575 23.1088 18.7687 22.22C20.175 22.5463 21.2325 23.5813 21.6262 24.8188L23.0775 30.455C23.1787 30.8488 22.74 31.175 22.29 31.175H22.3013Z" fill="black" />
                    <path d="M20.8502 7.30264C21.469 6.74014 22.2677 6.42514 23.1002 6.42514C27.5665 6.42514 27.5665 13.1751 23.1002 13.1751H23.0327C21.5927 13.1751 21.5702 15.4251 23.1002 15.4251C26.2052 15.4251 28.7252 12.9051 28.7252 9.80014C28.7252 4.90639 22.8865 2.37514 19.3202 5.63764C18.2177 6.63889 19.7365 8.30389 20.839 7.29139L20.8502 7.30264Z" fill="black" />
                    <path d="M34.2714 26.5288L32.7976 20.8363C31.7851 17.5401 28.1401 16.1226 27.0714 16.6851C25.8226 17.3488 24.6864 17.5626 23.9551 17.6301C22.4701 17.7538 22.6614 20.0038 24.1464 19.8688C25.0239 19.7901 26.3289 19.5538 27.7801 18.8563C29.1751 19.1713 30.2551 20.2288 30.6376 21.4551L32.1001 27.0913C32.2014 27.4851 31.7514 27.8113 31.3014 27.8113H28.5114C27.0264 27.8113 27.0264 30.0613 28.5114 30.0613H31.3014C33.3039 30.0613 34.7214 28.3288 34.2826 26.5401L34.2714 26.5288Z" fill="black" />
                </svg>
                Staff</p>
        </a>

    </li>

    <li class="nav-item   li_tag">
        <a class="nav-link collapsed anc_tag" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <p class="p_tag"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 30 30" fill="none" class="icon_tag  mr-3">
                    <path d="M28.5 10.2501V8.00008C28.496 7.86248 28.4622 7.72739 28.401 7.60408L26.205 3.19408C25.9805 2.7444 25.6349 2.3663 25.2072 2.10236C24.7795 1.83841 24.2866 1.69909 23.784 1.70008H6.216C5.7134 1.69909 5.22049 1.83841 4.79277 2.10236C4.36505 2.3663 4.0195 2.7444 3.795 3.19408L1.599 7.59508C1.53654 7.72113 1.50274 7.85943 1.5 8.00008V10.2501C1.50103 10.9157 1.66575 11.5709 1.97965 12.1579C2.29354 12.7448 2.74697 13.2456 3.3 13.6161V26.9001H2.4C2.16131 26.9001 1.93239 26.9949 1.7636 27.1637C1.59482 27.3325 1.5 27.5614 1.5 27.8001C1.5 28.0388 1.59482 28.2677 1.7636 28.4365C1.93239 28.6053 2.16131 28.7001 2.4 28.7001H27.6C27.8387 28.7001 28.0676 28.6053 28.2364 28.4365C28.4052 28.2677 28.5 28.0388 28.5 27.8001C28.5 27.5614 28.4052 27.3325 28.2364 27.1637C28.0676 26.9949 27.8387 26.9001 27.6 26.9001H26.7V13.6161C27.253 13.2456 27.7065 12.7448 28.0204 12.1579C28.3342 11.5709 28.499 10.9157 28.5 10.2501ZM26.7 10.2501C26.7 10.8468 26.4629 11.4191 26.041 11.8411C25.619 12.263 25.0467 12.5001 24.45 12.5001C23.8533 12.5001 23.281 12.263 22.859 11.8411C22.4371 11.4191 22.2 10.8468 22.2 10.2501V8.90008H26.7V10.2501ZM3.3 10.2501V8.90008H7.8V10.2501C7.8 10.8468 7.56295 11.4191 7.14099 11.8411C6.71903 12.263 6.14674 12.5001 5.55 12.5001C4.95326 12.5001 4.38097 12.263 3.95901 11.8411C3.53705 11.4191 3.3 10.8468 3.3 10.2501ZM9.6 8.90008H14.1V10.2501C14.1 10.8468 13.8629 11.4191 13.441 11.8411C13.019 12.263 12.4467 12.5001 11.85 12.5001C11.2533 12.5001 10.681 12.263 10.259 11.8411C9.83705 11.4191 9.6 10.8468 9.6 10.2501V8.90008ZM15.9 8.90008H20.4V10.2501C20.4 10.8468 20.1629 11.4191 19.741 11.8411C19.319 12.263 18.7467 12.5001 18.15 12.5001C17.5533 12.5001 16.981 12.263 16.559 11.8411C16.1371 11.4191 15.9 10.8468 15.9 10.2501V8.90008ZM5.406 3.99508C5.48148 3.84529 5.59731 3.71957 5.74043 3.6321C5.88355 3.54464 6.04827 3.49891 6.216 3.50008H23.784C23.9517 3.49891 24.1164 3.54464 24.2596 3.6321C24.4027 3.71957 24.5185 3.84529 24.594 3.99508L26.142 7.10008H3.858L5.406 3.99508ZM17.7 26.9001H12.3V21.5001C12.3 21.2614 12.3948 21.0325 12.5636 20.8637C12.7324 20.6949 12.9613 20.6001 13.2 20.6001H16.8C17.0387 20.6001 17.2676 20.6949 17.4364 20.8637C17.6052 21.0325 17.7 21.2614 17.7 21.5001V26.9001ZM24.9 26.9001H19.5V21.5001C19.5 20.784 19.2155 20.0972 18.7092 19.5909C18.2028 19.0845 17.5161 18.8001 16.8 18.8001H13.2C12.4839 18.8001 11.7972 19.0845 11.2908 19.5909C10.7845 20.0972 10.5 20.784 10.5 21.5001V26.9001H5.1V14.3001C5.24898 14.324 5.39924 14.339 5.55 14.3451C6.15754 14.3399 6.75612 14.198 7.3014 13.93C7.84668 13.6621 8.32468 13.2749 8.7 12.7971C9.07964 13.2669 9.55956 13.6458 10.1046 13.9061C10.6496 14.1664 11.246 14.3015 11.85 14.3015C12.454 14.3015 13.0504 14.1664 13.5954 13.9061C14.1404 13.6458 14.6204 13.2669 15 12.7971C15.3796 13.2669 15.8596 13.6458 16.4046 13.9061C16.9496 14.1664 17.546 14.3015 18.15 14.3015C18.754 14.3015 19.3504 14.1664 19.8954 13.9061C20.4404 13.6458 20.9204 13.2669 21.3 12.7971C21.6798 13.2666 22.1598 13.6453 22.7048 13.9053C23.2498 14.1654 23.8461 14.3003 24.45 14.3001C24.5999 14.309 24.7501 14.309 24.9 14.3001V26.9001Z" fill="black" />
                </svg>
                Branches</p>
        </a>

    </li>

    <li class="nav-item   li_tag">
        <a class="nav-link collapsed anc_tag" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <p class="p_tag"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 33 33" fill="none" class="icon_tag  mr-3">
                    <g clip-path="url(#clip0_38_1425)">
                        <path d="M31.8592 23.8163H30.0576C30.7235 22.9028 31.1176 21.7792 31.1176 20.565C31.1176 17.8618 29.1687 15.6068 26.6026 15.1273C26.6818 14.7559 26.7254 14.3714 26.7254 13.9765C26.7254 11.2734 24.7765 9.01823 22.2102 8.53888C22.2896 8.16743 22.3332 7.78299 22.3332 7.38819C22.3332 4.33725 19.851 1.8551 16.8001 1.8551C13.7492 1.8551 11.267 4.33725 11.267 7.38819C11.267 7.78299 11.3103 8.16754 11.3897 8.53899C8.82359 9.01845 6.87479 11.2735 6.87479 13.9766C6.87479 14.3713 6.91744 14.7561 6.99653 15.1275C4.43093 15.6073 2.48246 17.8622 2.48246 20.565C2.48246 21.7794 2.87672 22.9029 3.5425 23.8163H1.74097C1.11086 23.8163 0.600098 24.3272 0.600098 24.9572V25.5465C0.600098 28.9644 3.38083 31.7451 6.79864 31.7451H26.8014C30.2194 31.7451 33.0001 28.9644 33.0001 25.5465V24.9572C33.0001 24.3272 32.4892 23.8163 31.8592 23.8163ZM28.836 20.565C28.836 22.3578 27.3774 23.8163 25.5845 23.8163C23.7917 23.8163 22.3331 22.3578 22.3331 20.565C22.3331 18.7722 23.7916 17.3135 25.5845 17.3135C27.3774 17.3135 28.836 18.772 28.836 20.565ZM13.5486 20.565C13.5486 18.7722 15.0072 17.3135 16.8001 17.3135C18.5929 17.3135 20.0516 18.772 20.0516 20.565C20.0516 22.3578 18.593 23.8163 16.8001 23.8163C15.0073 23.8163 13.5486 22.3578 13.5486 20.565ZM24.4438 13.9765C24.4438 14.4118 24.3572 14.8271 24.2013 15.207C22.9872 15.5206 21.9342 16.2378 21.1923 17.2054C20.4504 16.2378 19.3974 15.5206 18.1834 15.207C18.0275 14.8271 17.9409 14.4119 17.9409 13.9765C17.9409 12.1837 19.3994 10.7251 21.1923 10.7251C22.9852 10.7251 24.4438 12.1837 24.4438 13.9765ZM16.8001 4.13674C18.5929 4.13674 20.0516 5.59528 20.0516 7.38819C20.0516 7.82423 19.9625 8.2391 19.8061 8.61939C18.5933 8.93347 17.5415 9.65019 16.8002 10.617C16.0584 9.64943 15.0054 8.93227 13.7914 8.61863C13.6354 8.23888 13.5488 7.82358 13.5488 7.38819C13.5486 5.59528 15.0073 4.13674 16.8001 4.13674ZM12.4079 10.7252C14.2007 10.7252 15.6593 12.1837 15.6593 13.9766C15.6593 14.4119 15.5727 14.8272 15.4168 15.2071C14.2028 15.5207 13.1498 16.2379 12.4079 17.2055C11.666 16.2379 10.613 15.5207 9.39893 15.2071C9.24304 14.8272 9.15643 14.412 9.15643 13.9766C9.15643 12.1837 10.615 10.7252 12.4079 10.7252ZM4.76421 20.565C4.76421 18.7722 6.22275 17.3135 8.01566 17.3135C9.80846 17.3135 11.267 18.772 11.267 20.565C11.267 22.3578 9.80846 23.8163 8.01566 23.8163C6.22275 23.8163 4.76421 22.3578 4.76421 20.565ZM26.8014 29.4635H6.79864C4.82595 29.4635 3.18937 27.9975 2.92046 26.098H30.6797C30.4108 27.9975 28.774 29.4635 26.8014 29.4635Z" fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_38_1425">
                            <rect width="32.4" height="32.4" fill="white" transform="translate(0.600098 0.600098)" />
                        </clipPath>
                    </defs>
                </svg>
                Food Stock</p>
        </a>

    </li>

    <li class="nav-item   li_tag">
        <a class="nav-link collapsed anc_tag" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <p class="p_tag"> <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 37 36" fill="none" class="icon_tag  mr-3">
                    <g clip-path="url(#clip0_38_1429)">
                        <path d="M30.272 31.7812H36.6001V16.9453H30.272V31.7812ZM32.3813 19.0547H34.4907V29.6719H32.3813V19.0547Z" fill="black" />
                        <path d="M28.1626 21.1641H21.8345V31.7812H28.1626V21.1641ZM26.0532 29.6719H23.9438V23.2734H26.0532V29.6719Z" fill="black" />
                        <path d="M13.397 31.7812H19.7251V25.4531H13.397V31.7812ZM15.5063 27.5625H17.6157V29.6719H15.5063V27.5625Z" fill="black" />
                        <path d="M23.9438 9.5625C23.9438 4.2897 19.6857 0 14.4517 0H13.397V10.6172H23.9438V9.5625ZM15.5063 8.50781V2.18524C18.7382 2.65395 21.3009 5.24384 21.7608 8.50781H15.5063Z" fill="black" />
                        <path d="M19.7251 13.7812V12.7266H11.2876V4.28906H10.2329C5.0063 4.28906 0.600098 8.51597 0.600098 13.7812C0.600098 19.0491 5.00911 23.2734 10.2329 23.2734C15.4669 23.2734 19.7251 19.0152 19.7251 13.7812ZM10.2329 21.1641C6.08447 21.1641 2.70947 17.8521 2.70947 13.7812C2.70947 10.0614 5.52718 6.97542 9.17822 6.47072V14.8352H17.5406C17.0273 18.409 13.9458 21.1641 10.2329 21.1641Z" fill="black" />
                        <path d="M13.397 33.8906H36.6001V36H13.397V33.8906Z" fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_38_1429">
                            <rect width="36" height="36" fill="white" transform="translate(0.600098)" />
                        </clipPath>
                    </defs>
                </svg>
                Report </p>
        </a>


    </li>

    <li class="nav-item   li_tag">
        <a class="nav-link collapsed anc_tag" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <p class="p_tag"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 35 34" fill="none" class="icon_tag  mr-3">
                    <path d="M17.3851 2.79996C17.201 2.80177 17.0191 2.84 16.8497 2.91251C16.6804 2.98503 16.5269 3.0904 16.3981 3.22255C16.2693 3.3547 16.1678 3.51114 16.0992 3.68277C16.0307 3.85439 15.9965 4.03785 15.9986 4.22275V15.4761C15.9987 15.8493 16.1464 16.2073 16.4093 16.4712C16.6721 16.7352 17.0285 16.8833 17.4001 16.8833C17.7718 16.8833 18.1282 16.7352 18.391 16.4712C18.6538 16.2073 18.8015 15.8493 18.8017 15.4761V4.22275C18.8038 4.0353 18.7687 3.84927 18.6983 3.67566C18.6278 3.50205 18.5236 3.34429 18.3916 3.21173C18.2596 3.07918 18.1026 2.97452 17.9298 2.90379C17.7569 2.83307 17.5717 2.79777 17.3851 2.79996ZM25.5535 5.62084C25.5079 5.61952 25.4623 5.62043 25.4167 5.62358C25.1399 5.64718 24.8764 5.753 24.6596 5.92748C24.4428 6.10197 24.2826 6.33723 24.1993 6.60343C24.116 6.86964 24.1135 7.15479 24.192 7.42245C24.2705 7.69012 24.4265 7.92828 24.6401 8.10664C27.0655 10.1753 28.5999 13.2544 28.5999 16.712C28.5999 22.9552 23.6087 27.9873 17.407 27.9873C11.2052 27.9873 6.20314 22.9552 6.20315 16.712C6.20316 13.2744 7.71806 10.2163 10.1192 8.14782C10.259 8.02789 10.374 7.8814 10.4576 7.71683C10.5411 7.55226 10.5916 7.37279 10.6061 7.18863C10.6205 7.00448 10.5988 6.81935 10.542 6.64364C10.4852 6.46794 10.3945 6.3052 10.2751 6.1647C10.1557 6.0242 10.0099 5.90869 9.84604 5.82478C9.68219 5.74088 9.50349 5.69011 9.32014 5.67558C9.13679 5.66104 8.95239 5.68296 8.77746 5.74001C8.60253 5.79705 8.4405 5.88812 8.30062 6.00806C5.3033 8.59013 3.40016 12.4388 3.40015 16.712C3.40013 24.4728 9.68934 30.7999 17.407 30.7999C25.1246 30.7999 31.4002 24.4728 31.4001 16.712C31.4001 12.4139 29.4782 8.54938 26.4504 5.96688C26.2014 5.74889 25.8837 5.62632 25.5535 5.62084Z" fill="black" />
                </svg>
                Logout</p>
        </a>

    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

    <!-- Sidebar Message -->


</ul>