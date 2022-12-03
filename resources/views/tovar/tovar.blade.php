<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    

    </head>
  <body>
    <header id="pageHeader">
    @include("tovar.elems.header")
    </header>
          <nav id="mainNav" >
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16345 24.8366 0 16 0C7.16344 0 0 7.16345 0 16C0 24.8366 7.16344 32 16 32ZM18.4696 12.3621C19.8334 10.9981 19.8334 8.78686 18.4696 7.42293C17.1057 6.05903 14.8944 6.05903 13.5305 7.42293C12.1666 8.78686 12.1666 10.9981 13.5305 12.3621L16 14.8316L18.4696 12.3621ZM19.638 18.4696C21.0019 19.8335 23.2132 19.8335 24.5771 18.4696C25.941 17.1057 25.941 14.8944 24.5771 13.5305C23.2132 12.1666 21.0019 12.1666 19.638 13.5305L17.1685 16.0001L19.638 18.4696ZM18.4696 24.5771C19.8334 23.2132 19.8334 21.0019 18.4696 19.638L16 17.1685L13.5305 19.638C12.1666 21.0019 12.1666 23.2132 13.5305 24.5771C14.8944 25.941 17.1057 25.941 18.4696 24.5771ZM7.42291 18.4696C6.05904 17.1057 6.05904 14.8944 7.42291 13.5305C8.78686 12.1666 10.9981 12.1666 12.3621 13.5305L14.8316 16.0001L12.3621 18.4696C10.9981 19.8335 8.78686 19.8335 7.42291 18.4696Z" fill="white"/>
              </svg>
          </nav>
          <nav id="secondNav">
            <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="49" height="50" rx="6" fill="#6C6DE5"/>
                        <g clip-path="url(#clip0_171_8071)">
                              <path d="M31.2354 25L28.2354 30.1962L31.492 31.6936C32.4304 32.1252 33.5431 31.7711 34.0596 30.8765L34.7367 29.7037C35.2532 28.8092 35.0035 27.6685 34.1605 27.0716L31.2354 25Z" fill="#E9E9FF"/>
                              <path d="M18.7952 25L21.7952 30.1962L18.5386 31.6936C17.6001 32.1252 16.4874 31.7711 15.971 30.8765L15.2939 29.7037C14.7774 28.8092 15.0271 27.6685 15.87 27.0716L18.7952 25Z" fill="#E9E9FF"/>
                              <path d="M22 20H28L27.6801 16.801C27.5779 15.7786 26.7175 15 25.69 15H24.31C23.2825 15 22.4221 15.7786 22.3199 16.801L22 20Z" fill="#E9E9FF"/>
                              <path d="M22 30H28L27.6801 33.199C27.5779 34.2214 26.7175 35 25.69 35H24.31C23.2825 35 22.4221 34.2214 22.3199 33.199L22 30Z" fill="#E9E9FF"/>
                              <path d="M21.7728 19.7762L18.7728 24.9724L15.8689 22.9139C15.0265 22.3168 14.7772 21.1765 15.2934 20.2823L15.9714 19.1081C16.4877 18.2138 17.5998 17.8596 18.5382 18.2906L21.7728 19.7762Z" fill="#E9E9FF"/>
                              <path d="M28.2577 19.7762L31.2577 24.9724L34.1617 22.9139C35.0041 22.3168 35.2534 21.1765 34.7371 20.2823L34.0592 19.1081C33.5429 18.2138 32.4307 17.8596 31.4924 18.2906L28.2577 19.7762Z" fill="#E9E9FF"/>
                              <circle cx="25" cy="25" r="7" fill="#E9E9FF"/>
                              <circle cx="25" cy="25" r="4" fill="#9999EE"/>
                        </g>
                      <defs>
                          <clipPath id="clip0_171_8071">
                          <rect width="20" height="20" fill="white" transform="translate(15 15)"/>
                          </clipPath>
                      </defs>
              </svg>
              <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="49" height="50" rx="6" fill="#5B5CE2"/>
                        <g clip-path="url(#clip0_171_8085)">
                            <circle cx="25" cy="22" r="3" fill="#E9E9FF"/>
                            <path d="M20 32C20 29.2386 22.2386 27 25 27V27C27.7614 27 30 29.2386 30 32V32.8333C30 33.4777 29.4777 34 28.8333 34H21.1667C20.5223 34 20 33.4777 20 32.8333V32Z" fill="#E9E9FF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25 35C30.5228 35 35 30.5228 35 25C35 19.4772 30.5228 15 25 15C19.4772 15 15 19.4772 15 25C15 30.5228 19.4772 35 25 35ZM25 33C29.4183 33 33 29.4183 33 25C33 20.5817 29.4183 17 25 17C20.5817 17 17 20.5817 17 25C17 29.4183 20.5817 33 25 33Z" fill="#9999EE"/>
                        </g>
                    <defs>  <path d="M25 17.8823L20.0629 23.5952C19.6505 24.0725 18.9148 24.137 18.4198 23.7392C17.9248 23.3415 17.8579 22.6321 18.2704 22.1548L24.1037 15.4048C24.5702 14.8651 25.4298 14.8651 25.8963 15.4048L31.7296 22.1548C32.1421 22.6321 32.0752 23.3415 31.5802 23.7392C31.0852 24.137 30.3495 24.0725 29.9371 23.5952L25 17.8823Z" fill="#9999EE"/>
                        <clipPath id="clip0_171_8085">
                        <rect width="20" height="20" fill="white" transform="translate(15 15)"/>
                        </clipPath>
                    </defs>
              </svg>
              <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="49" height="50" rx="6" fill="#5B5CE2"/>
                  
                    <path d="M15.0911 24.4037C14.783 23.7427 15.2943 23 16.0575 23H33.9425C34.7057 23 35.217 23.7426 34.909 24.4036L30.8049 33.2109C30.2981 34.2983 29.161 35 27.9055 35H22.0953C20.8399 35 19.7029 34.2984 19.1961 33.2111L15.0911 24.4037Z" fill="#E9E9FF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25 32C26.6569 32 28 30.8807 28 29.5C28 28.1193 26.6569 27 25 27C23.3431 27 22 28.1193 22 29.5C22 30.8807 23.3431 32 25 32Z" fill="#9999EE"/>
              </svg>
              <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="49" height="50" rx="6" fill="#5B5CE2"/>
                          <g clip-path="url(#clip0_171_8106)">
                          <rect x="14.1617" y="26.3859" width="17.6242" height="13" rx="2" transform="rotate(-43.7913 14.1617 26.3859)" fill="#E9E9FF"/>
                          <rect x="16.6053" y="28.9348" width="17.6242" height="2.78503" transform="rotate(-43.7913 16.6053 28.9348)" fill="#9999EE"/>
                          </g>
                    <defs>
                        <clipPath id="clip0_171_8106">
                        <rect width="20" height="20" fill="white" transform="translate(15 15)"/>
                        </clipPath>
                    </defs>
              </svg>
              @yield('aside')
          </nav>
          

        <article id="article">
            
            <div class="d-flex w-100">
                  <div class="text-left m-5 w-100">
                        <div class="d-flex justify-content-between align-items-center w-100">

                            @yield('content')

                            

                        </div>
                  </div>
            </div>
          </article>
         
          <footer id="footer">
          @include("tovar.elems.footer")
    <footer id="pageFooter"></footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
      </script>
      
      
  </body>
</html>



