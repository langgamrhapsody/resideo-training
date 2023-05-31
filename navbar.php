 <nav class="navbar navbar-expand-lg navbar-dark">
     <div class="container navbar__custom">
         <a class="navbar__brand" href="#">
             resideo.
         </a>
         <button class="btn navbar__toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
             aria-controls="offcanvasRight">
             <svg xmlns="http://www.w3.org/2000/svg" class="navbar__toggler-icon" viewBox="0 0 448 512" width="24"
                 height="24">
                 <path fill="currentColor"
                     d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
             </svg>
         </button>
         <div class="offcanvas offcanvas-end offcanvas__custom " id="offcanvasRight"
             aria-labelledby="offcanvasRightLabel">
             <div class="offcanvas__header">
                 <button type="button" class="offcanvas__header-button btn-close btn-close-white"
                     data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <ul class="navbar__nav">
                 <li class="navbar__nav-item">
                     <a class="navbar__nav-item-link active " aria-current="page" href="#">Home</a>
                 </li>
                 <li class="navbar__nav-item">
                     <a class="navbar__nav-item-link" href="#">Properties</a>
                 </li>
                 <li class="navbar__nav-item">
                     <a class="navbar__nav-item-link" href="#">Agents</a>
                 </li>
                 <li class="navbar__nav-item">
                     <a class="navbar__nav-item-link ">Blog</a>
                 </li>
                 <li class="navbar__nav-item">
                     <a class="navbar__nav-item-link disabled">Themes</a>
                 </li>
                 <li class="navbar__nav-item">
                     <a class="navbar__nav-item-link" href="#">Contact Us</a>
                 </li>
                 <li class="navbar__nav-item--custom">
                     <a class="btn navbar__nav-item-link--custom" href="#">
                         <svg class="profile-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                             <path fill="currentColor"
                                 d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                         </svg>
                         <p class="profile-name">Langgam Rhapsody</p>
                     </a>
                 </li>
             </ul>
         </div>
         <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn navbar__login">
             <svg class="navbar__login-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                 <path fill="currentColor"
                     d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
             </svg>
         </button>
     </div>
 </nav>