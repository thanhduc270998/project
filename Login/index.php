<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets-css/fonts/fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Block Element Modifier -->
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate" style="--white_color: white">
                            Vào cửa hàng trên ứng dụng SBGroup
                            <!-- Header QR-code -->
                            <div class="header__qr">
                                <img src="assets-css/img/QR-code.png" alt="QR-code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link">
                                        <img src="assets-css/img/CHplay.png" alt="CH-play" class="header__qr-download-img">
                                    </a>
                                    <a href="" class="header__qr-link">
                                        <img src="assets-css/img/appStore.png" alt="appStore" class="header__qr-download-img">
                                    </a>
                                </div>

                            </div>
                        </li>
                        <li class="header__navbar-item" style="--white_color: white">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link"> <i class="header__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed ">
                                        <a href="" class="header__notify-link">
                                            <span>
                                                <img src="data:image/jpeg;base64,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" alt="" class="header__notify-img">
                                            </span>
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dịch vụ tăng Like giá rẻ</span>
                                                <span class="header__notify-descriotion">Dịch vụ tăng like giá rẻ là khi
                                                    bạn đăng bài hệ thống sẽ tự động tăng like vào bài viết đó cho
                                                    bạn</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed ">
                                        <a href="" class="header__notify-link">
                                            <span>
                                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBIQDxIPDxAPDw8QDw8PDw8PEA8PFRUWFhURFRUYHSkgGBolGxUWITEhJSkrLi4uGCAzODMsNygtMisBCgoKDg0OGxAQGSsmHyItMi0rMC0tLy8uLS0rLS0tLS0tLTUtLS0rLS8tLS0vLS0tKy0tLS0tLS0tLS0tLS0tLf/AABEIAK4BIgMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAQIHAAj/xABMEAACAQMBBQQGBAsDCgcAAAABAgMABBESBQYTITEiQVFhBxQycYGRNEJSdCMkM2Jyc4KhsbK0kqKzFRYlNUNEU5PR02ODhKPBw+H/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAtEQACAgEEAQMCBgIDAAAAAAAAAQIRAwQSITETIkFRMoEUYZGhsfDB4TNCgv/aAAwDAQACEQMRAD8A5GKkStBUi0CJUFEIKijFERigKJoxRMa1FGtFxLQBJGtFxJUcSUZElAUbxpRMSViJKLijoCjMcdEpHXo0olEoCjCR1MkdbolTolAURrHU8UWB763WOilj5D3UxMEMdYMdGcOsFKBoFEdShM8jUwjrZY6BMXPDg4qJoqZ3EfP3ih2jpDF7RVC8VMWjqF0oGLJI6GeKmkkdDSJQIWSRUJLHTWRKGmjpgKJY6EkSm0sdCSx0gsVSJQsiUzlSg5VoAXSLQ7rRzrQ7rQAGwrQip3WoyKAIcV6t8V6gDZRUyCo1FTxigZNGtERrWka0TElAiaJKLiSo4kouJaAJoUouJKiiA8R8xRsIHl86AJYY6LiStIlphZhVZWkBZFZS6jJJQEahy8s0AaRR0UkdJRvBLAzJe2nFIOYJrFODFOnjnDBkPI5HMZIxTfYd1PNExuoooJDIGijji4TrBg9pxnPNjgasHsE9Dz0licVbJU02Fxx1OsdbIlTolZlGiR0SUraGPn7qkNMCHRWNAqcLWdFIZAI62VKlC17TQIhni5e6hWjpoBkYoVo6AAWjqB46YOlQOtAC6RKHkjpjItDOtAxbJHQkqU1kSgplHlTEKpUoOVKaTKPKgZceI+YpALZUoOVaZSAHoQfdQcq0ALpFoWQUfKKEkWgAJxULCipFodhQBFWK3xXqAs3QUTEKgjomEUAGxJRUKVDEKMgFMgniSm2zHMa3Mq6Q8VlcSRsyI4RxpAfDAjIyeo76XxCjrdnU5jeSJueHidkcZ64Ipp07AWLvdeHkLhD7rey/7dbNvbfDrcAf+nsx/wDXTfaUkxsbri3FzOPxPCzzPKFPrCcwCeRoDcfVx5tLPG3qNxh42KOp1Rc1Ycwa74yhKDntXH9+DFpp1Y03T23Pdm4SeVZhHAjoOFbqVfjRrqBRQejEfGrHaW+tlUHGohcnoufrH3dfhQlsso9u4upgfqzTySLnxwT1r23bvgWc8mcM6erx4ODxJsqSPMRiQ/AVxyfknwqs2XC5KtNvteLJIbOc21u8jNFFHFbqBHnCZ7GSdIGScmrTuVtJrqCRpdLTxTkSOqRoZI5BqjdggAzkSLnHRRVN3Z2OLkXRxkw2jmFRntXTZMS/ERyCi/R5f8O8WMnsXaGE+HE9uI/21C/t12ZccXFqK5RlGTtN+5f9qzPDa3MsZ0yRWs7xthW0uFOGwQRXPbffjaKOrPMZkVgXheO3VZVB5oSEyMjlkdK6FvGPxG8+53H8hrjdZ6aEZRdoeVtNUd5tZ0dElhOqOSMSxsR1RlypI8R0I8Qa5TsrfPaTyQBrp2DywBhwrfDBnUMPY8Caf+jDbGVksXPNVknts96kEzR/wcDzeqFsT8rbfrrX+dKrFiUXJNBOdpNHZt6tuRWEZkZeI7u6QQBtPEI6kn6qKCMnzAHXlzS+382gxyLhbYE8kgjijHuywLH4mmHpWnLbQ0d0NvEoHgWLSE/3x8qebn7HjTZ8VzJcepq4keaZZUty2Z3jjDTHBChQgCggZYnnmpjGOPGpNW2NtylSZTod/wC/jOWu+KBglJkt5MgdRzXNdpnjAZgOgZse7PKqw8liRgbZQjvEm0redT71kYg1aYSrorq6yq6qyyIyssikcmBXkQfKsM0t1emjSEa97INOKD21ex20ElzLnRGoJVfadyQqRjzLEDPcMnupmUqnelIN6iunoLuEyeSaJQD/AGyvzFRjipSSY5OlZTr7fu/ckxyJar3JDHHyHnI4LMfPI9woSPfe/wA/TGf811tpAfgUr26k9ukzesPwdSBYbgxCZYJNSksUIIBKggPg6cnxyOhpskzR64b57iP7a+qXcXxBVgPccV25JQxuthjFOXNkLbRk/wAmG7Uqs52bxtaxoAJh2WcIRpHMHljHOq3utvFeXF0sU83EjaK6LIYrcAlYJGU5VARhgDyPdVm21AY9m3KEoeHZSquiNIlxkHkqgAcyTy8aou4v0+P9Vd/08tZ4lF45Ovkcm1JKy9SJVW3n3gu4LpoYZRHGkVrpQQWzAFreJmOWQk5ZieZ76uDrXPd+Pp8v6qz/AKaGo0yTlyvYeRtIfba2vcR7PtLiNwk85j40qxQapPwbnmNOBzA6AVWm3rv++7lHuEK/wWnG8X+qdn++P/CkoLdKYLHdqLlbN5PUyjm7WzLqhn1qrlhn2lyPMV0RUYwb23y/5IduVWCJvRdMcSvHdKDzjuYYpR/aADqfMMDU19GjJHPECsU2scNm1NDKhAeIt9YdpWU8iVcZ5g1NvJKpgjRrpLyYTsyuLhbto7fh4ZDKCeRfSQpPLDHlnnDajFgoPWW9nlj841iiiZvdrUr70PhWWVRePfVMqFqVWKpVoV1o6YUK4rjNmBSrQrijZhQjimIhxXq2rFAG0YoyEULHRcVIbD4qMhoGI0bEaZO0NiFGwigoaPhoHRLtT6Bde+z/AKhKA3E+kTfcbj+aKmG1foF177P+oSl+4f0mX7jcfzR12Yv+B/cyn9aLjEKrXpBu+dvbA+wjXEg7i8uBHnzCJn/zatdpFqZVzjJAJP1R3t8Bk/CuY7b2j6xPNcc9MsjOgxzWIco1x5IFHwqNLG5X8DyulRetwIljtBJrhDyXDzaXmhRgItKRKQzA9RIfc9Una0Xq13KsLKeBcFoHUhlADa4iCORwNPTwoifdpkZkeexV0Yq6l7klWHIqSISMg8uRNCbQ2Y0AjJaKRJdeh4WdlyhAZTqVSCNSnp0YV0Y9u9tSuzOV110dX25crNsy5nT2J9nyyr5a48lfgcj4VzDde0jmvYIpQWjkaRXC+1jhOcr5ggEeYFWndq/4mxb+A+1awXOkf+DMrOD/AGxJ8xVf3F/1nafrX/wnqccdkZr+9Dk7cRfLHNZXJGoCa3fsyKOy4x2XA+yykHHg2Kh2UuJ7cDoLi3A93EWr56TNhdlblBziAWTH1oGbsn9h2x7pV7lqibM/LwfeLf8AxFrXHPfDcTKO10WL0nqRtOXzjgI93DA/iDVlS2E270EYfh68ZfhTTfk7mRiNMYLZyvhQnpb2SxmF0gJCR8OYfZTWxSX9HLlCe7C+NJ909+prCL1cxJcQhmaNWcxPEWOpgGAOQWJOCOpPPurGnPFFw7RfCk79yvbVsTbzNEWD6VjYMFdMrIiyL2WAZThhkEZBrt26A/0dZfc7f+QVxfeLavrl1Jc6OFxSn4PVr06UVPawM+znpXbdzF/0bZfc7f8AkFLU3sV9jxfU6DytLdt7P48TR4RtQIKSAmOReRKNgg9QCCCCCAR0pwy1Xt9tqy2dm08HDLpLCCJE1qUZtJGMjHNl5g1xxTbSRs3SOa7V3UEbHDSW5zgJdRvJHnryuYVI0+bovmTSN4rizlVwWhkI1xzQyqQ6ZxqSSMkOvLx8jVvX0nTEYktLZ/0ZZkB+B1VVtvbZa7dWMcUCRh9EUQIRdZ1OxJ5liQMnyHIV6GPy3U+jmls9i8R7Wa82NdyuBxkguIZioCh2RUcSYHIZVuYHLIPSqpuIfx+LzjuwPf6vLVt3P2bp2a8cwYLdcaSVQDqFvNGsQIH2tClwPzl8aoWJ7C5U5CzQMro2A0cino69zRuufgSOR6Tj2vfCJUr4kzqsgrnG/B/H5fJLQfEW0NOTv8hX6H2/D1puF8tGrHlq+NVjE99cscqZp2Z3bAWONR1dvsxooHwAHM9ZwYpQbcgnJPhD/eP/AFTs/wB8R+cLkfuIqv7N2esyyu8qwJBwQzGKeYsZS4UBYlJ/2Z548Ks2+YUWUCx5EcdykUQb2uFHbaELeBKqCfMmkGwdrrbCZXiMyz8H2ZREUMRkIOSjZzxD3d1XBt4249/7E0lKmQXezlWMywzJcRoyJKViuIHiZ9WglJVUlTpYahnmMeGWkc3rFsJGA4ts0Vs+kYVoCrtC2OikFJFOOvI9SSR9rbcSWMxQwmJXdGkZ5RK76MlUGEUKoLE95PKpNloUs3J5etTxGMHq0UAlDSDy1yBR4lW8KjLbxXPsca3+noBmFBuKOmFBS1wm4JKKEcUVLQslMKIK9Wc1igKJYxRcQoWOi4qQBcQo2FaEho6GgAuEUfAtBQ0zsYGdgqgEnJ5kKqqBlmYnkFABJPcBQMmcaoniMaTLLo1JI8sY7DB1IZCCMEVtsWyELsyW0EJeNoy63F1KwRiCQFkYj6o517/KNnGcF7icj60MaJHnyaRtTDz0imdhcwzIzw8YcN40ZZhHz1hyCCp/MPd31s4ZYx5tIz3Rb/MJwdDgKr645IyrM6Aq6lT2lOVOCeYpLZ7tqro/qlqNDo4zdXzgFSCOyXweY6HrT+Gi4qzU5LplNJ9k0UI7wCepJAySepNAbf2ILlUXhQyhXLgSSTQ6WICkgxEZyAOR+yKaR0ZCKSbTtDZVtlbq8JZ1FvAouLd4HAur1g6MQSp1Ny6dRzHPxrOw90OBcRzC3t0MbEh1ubxypIK5Cs2DyJ61cFqZap5JfLEor4B9pWImjZCFbKsuHBKsrKVZGxzwQSKp1puBpkRvVrYaHR8+t3xIKkEHBbB6V0BBU6ClGco9MbSfYHtHZqzqAxKuvNJE5MjHrjxB6EHkRyOapF96OssSILSTwMclxZEjzSMlB+yorpCivXEgjRpGzpjRnbAycKCTj5URlJdMGk+zmUHo4Ofo1qvnJdXs4H7IZQa6Bsyz4MMcXYAjRUAjXQgAGAFXuAqtx+kmzd0RIrluI6ICViQAsQAT2s99XNlq8iyL67Jjt/6gzLSjeLZvrMDQ4ibVpysyuyHSwYZ0kEHKg5BFOmFQuKyTos5nLuFj/dbc/oXt7GPkxaprDcjSwPAtYcH2nee9YearKeHnzKmugPULVp5Zvi2RtXwLYrURrpBZjzLO5LM7HqzE9SaQbX2AJB2RE6ZJ4NwhdFJ9oxOpDxZ79LAE8yDVpnFByVCddFFCbdUA/Q4ff/lC70/2cZ/vUwtNj6BhhFGmQTDboyI5HsmV2JeXHcGYgHmADVjkoSWqc5S4bFtS6Ql2zb8WMRmGKdRJxAJJZ4tL6SuQY2GeR6GkEmykH+5Q/C/vB/HNWyagNo3FtC2iWScyBY2ZYrdGUa0VwNbSDPJh3VUHkfEGxS29srq2iqcrZW6EdDNd3V0n/L7IPubIraYMSWkYu5ABYgDkBhVVRgKoHIKAAKb3qx6Y3iLlJouIBIFDr+EkjIOkkdY8/Glc1TNybqTBJLoWzigZlphPQE1QUAyihJBRk1CS0AD4r1Zr1AEkYouIUNEKLjFAWFQ0dCKEtxR0dAWGQimLtotJ2HIyPbwZ79Da5HHx4Sj3ZqHY9uskqo+rSQ7NpIDEIjPgEg4zpxnB61HfbTikh4UUUkeZY5WaSdZfZV1AACLj8oflXRp8blNP2RnkkkqINm2gkMhbiaIY+IyxBTI+XSNUXVyBLOOZ6AGrFsNVRHRIriPW8bkzyQv7AcAKEUfbPXwpDsbaKwNIXQyLLGIyFkEZGJEkBBKnvQd3fVq2RcJcxloo3jZZliw8yyBgUZy2dC6cBRz8CfCt9V5P/JGLb9wyGjYqrdzvRBEdMMZuccjK8jRRMfFFA1EeZIz4UfsDeSC4lSGRDbO7AKRJxInP2MkZRj3ZyCeXLlnmenyJXRp5I3Vj+OjYulUux32R2jX1V14jxrn1kHTrYDP5PnjNXOZ0jDs7KkcQJeRuSqoOMn/oOZJwKmeKUHUkNTUughKnSqLeekGNSRBA0oH+0mk4QbzCKCQPec+6tIPSRj8rarpHUwzNqA8g4wfmK0/DZauheWHydESiFpbfbRit4jNO3DjAXOoZfURkRhR1bryHge6qZdek45/AWo09xmlOo/soMD5ms4YZz+lFSnGPZ0tKH2yPxW4+7zfyNVF2V6TkLBbqDhKTgywuZAvmyEZx7snyq77UlV7SZkIZXtpWVlOQymMkEHwxTlilBrchKSkuDguyPy9v+vt/51r6GevnnZH5e3/XwfzrXRtt+kxUkZLSETKpIM0jlUcjvRQMkeZIzXZqscpySijHFJRTsvT1C9U/YPpDinkWK5j9XZyFSRX1xFjyCtkApk9/MeOKuD1wzxyg6kjeMlLoHeoWqvbf32t7Z2ijU3MqEh9LBIkYdVL4OojvCjlzGcika+kV89q1i0/mzyBvmQR+6tI6fJJWkS8kVxZdpe/3UFJUOxduwXgYxFlkRcvDJgOq9NQI5Oue8dMjIGRU8mMEkhQoLMzEKqqBksxPQAVlKLTplJprgElFBy0rv98YFYiGJ7jHLiSOYI281UAtj3491CpvhGxxLbFR9qCclh+zIMH5itVpslXRPlj8jGaqxvV9Lf8AVWv9PFVnZ0dBLEwkickBgCpVh1R1PNWGRy7+oJFVjev6W/6q1/p4q10aayNP4IzO4hj/AEe0+6t/U3FLpqZ6C0NmqgszW2lVHVmNzcAAeZND3s9pG7RlJpjGdLSpcxxozj29KmI9kNkA554z31k8cp5JbV7lqSjFWJJ6Bmp9tuGJBFw1ljd4+JLFJIspjVsGLmEXDFO0QRyDL50imrFqnRdgMooOWjZaDlpDIKxXq9QBPHRcdBxmi4jTJDoKNiNBQUZGaBe422Zc8J1k069IcFdWksGRkIDYODhvA1HPbR+rmVI5oWSaKLEk8cwZXSViezGuCOGPnUcJo66+hv8Ae7b/AArit9PJqaS9yMiuIJsm0WQTFlkk4USuqRyLEWLTRx+0ysAAHJ6d1OXlEGzp0SOSHjTpHmSZJmPETLgFUXA0Qae/8oaC3Y/3n7tH/UwUbt/nZjyvIs/GGbH8DXTkk3mUb4M4pbLE2xbATyMCGKxxNK6oQrPhlRUDEELlnUZwcDJ7qbzbvlkbEEcLCN3jaGeeXUyKX4brKT1AbDKVwcciDy03IYcS4HebXUPcs0JP7j+6rfDIFDs3JVhnZj4AROSajUZZxyUmVjinHk5rsz8vB+vg/wARauPpLviDFbg4DGS4k/Ow7Rxg+Q0ufeRVN2SMTQDwnt/51qyekkfjcZ7jbYHvE8+R+8fOumaTyx+5lF+lgO7mwjcK0mjiAScJIy5iQsFDO8jDtaVDLyXBJYcwAasEO6GHQvbQFQ6MeBc3KnskHDLMXDA4weh5nnRPo6cG0cDqtzID+1HER/KflVtRq4s+WayNJm+OEdq4Odekq9ZrmOAnKwQq585pe07Efo6B8/Gp90d1jcQLMBDmRpO3NHxlRFOkKsZ7JYkMSSDgacdTSz0gj8fk84rcj3cNR/EGlcWxmeNJTJaxrKHKCaVlYhWKk4CHvHjXTS8KW6jK/W+LHW+u7/qgifEamR5EbhArG+kKyyBMnQcEggcuyCAMmrNuFfF9lXUTEn1cXCpnujeIuB8CW+GKoI2L4XFh/wA+T/t1d9xrXhWd8DJDJrR2HBdnAAhYc8qMHNRklHxqO62VFPddUc3iUnCqMltKqPFjyA+dX+PcVgpxBHKFyC73M8U0pHIsgU6EGc4DK3LGao+zZAksLMcKksLMfBQ6kn5CvoBjjl4Gnq8ko0k6DDFO7OC7Z2ebeZ4TlgukqWGC0bqGUkdxw2D5g10X/OCQbEF1k8bhC3D9/F4nA4nv0jV76qPpCcHaEoH1VhU+R4anH76YMp/zfX7xr/Z9YZM/Miqmt8IOXyiY8OVfmVnYmzvWJli7QGl3crguI0UsdOeWo4AGe9hVpbc8sApgjh19lZIrm4leNzyXiBzpdc4B0hSM5HTFLfR4wF+oP1oJ1XzbAbHyU/Kunx83X9Jf41lqss4zSTLxQi48o4rsu/a2mjnXIaJwzL9pfrxnyK5Hxq7ekS6McSQIeU8rsx+1DFp0j3FmB/YFUG8cMZGXmGaRl8wSSP41cfSQp1W2fqxzRnyZSmR/eFdGSKeSDf5mcX6WI9ibK4yvIUMgRkjSPWY1kkYMe245qqqpJxzJKjIyTRO0ti6YpHESwvCokxFLLLFJFqVG5SEsrqXU9SCNXIEU03IYerzDvFxGSPANGwB+amj9rsBbXRPT1Zx8WdFA+ZFc88s1mq+OC4xWwrG6U54zwfVuYnAHdxo1aSNvfyZfc5qLer6U36q1/p4q13W+mwHuVpGP6Kxux/cDWd6PpTfqrX+nirpqs/2/yRfo+4zkn4FlbTA/hXtpIbfB5oePPxZvLSrgL+c+fq0k2VAuWmkXVDbhWZP+NIeUUA/SYZPgiuam2jYsLe1n1l1eIoVJyYDxZtIx3K2lyPMP5VtbASWpReT2zvOyDpLE4VDLjvePAH6DnwOc5ejHKUe22NeqSTFl1IzMzuSzyMzux+s7HJPkMnkO4YA6Uvmo6Y0DNXmHVYHLQctGS0HLQBDWKzWKAN4zRUTUFGaLiNAB0L0bE1L4jRsJoAYwNTCc/ib/AHq2/wAK4pXCaYQXMqqVjZFDMrMHhhnBKggHEinBwzcx41pjntkpCkrVE27R5XX3eP8AqYKayKJInhYqgmChXbAWOZTqjLHuU9pCe7iZ7qX2txN2gzxFXADBLW1hJAYMAWRAcZUHGe6josEYPMHkRVZM26e9ExhUaZXIJprabK6opoWKsrAZU4wyOp5EEHBB5EGnK7Xu78raRJDGZuTiFHQsgwWLsWYiMcicYHTr0olrSQgKrQyooCxpdwLOIl+yj8nC/m6sDuFG7OtpEIOuOPSyuI7aFIYzIpyrv1aTB7mJHlW8tVB87eTNYmuL4KdspszQHxngP/uLV6312cZwAnOVJJDEP+KGOHhH53ZVlHf2h1IqG22VIGUiSEaWBAFhYjGDkYIj5U+uI1kUpIA6t7QPf51GTU7pKUV0VHFSafuc12Ptie0kZoSAT2JY5F1I2D7LryIIOfAjn506k9IF2CrabdFRlZwkRy6ggsuXZsZAI5eNPLrYbv8A7SOYYwovII7hlHgJOUnzY1i03ccEHVaxEHOu3s4xIPc0mrT8MVb1GKXMo8iWOa4TB/SBsoyus0ILssZ7IGWlt+bq6D6xXU2R1wynuNV3d3eiW0UqixTwsxfhygkKxABKMD2c4GRzHKumz2iSoI5NTYwQ5Y8QOOjhuobzpJebsM5J128xJ9q6tY5JPcZE0s3xJNRj1CUdk1aHLG7uLEdx6QZyPwdtaRnxKvLj5kCrZu7tM3Wy2mfSZOFeRyMiqoZlD4OF5eyVpbb7pMOpso+/VFZIzLjvBlLgVOm8FnCjW63Ut5JhlYwRSXxXlgqRGpRR+b08qJShNVjgOMZL6mcz2fatM8cK41Sssa6uS5bkM+VWK3332hAnq7cPXF+DJniLTxkctLdrBI8wfjTCzu7SGRHlmktgrAg3Oxo7RM934QwgL78inF1u8k6q8EttPCVAi40Ud0ioOixyqQ2ny1ECtsmdN+uHBCxNdM5xFHLczaRmSaVmdmY/FpHbuUdSegFdSOzU9Q9X5mLg8PIXtFOvGC/a1/hQPhWmzt3RH+UaPTlWMMEKQQsy8wzgdp8fnEjlTtmrDNqHNquEi4Y9vZxmWOa0mU50SKRJDKh7LgdJI26Mp/8Aw94pte76XksZiPBj1KVd4oykjKeRGSxC5H2QOtXLaOxFfPDfhhm1PC8cc0Dt3sY3BAPmMGlK7tuD0sFH2lsgWHmA7MufhWn4qEqc48keJrplZ3Z2YZZElYfgY5BjPIXEinIgTx5gaiPZXOe7Nr3ss+NHoJHEDh4nYhQZiMNGSeQ1jGD01Ko7+TGysRGdbO80ukLxJCMhfsqAAEXyUAV68UNqVgGVhgg8wRjpWU88pTUvguONJUc42ffzWkraOy4/BzRSpkEZB0SIefI4I6Ed1T7X3gmuE0OIoogwcpCpRWYZwzlmJOMnAJwM9Ksd3s58YV45EUYSO7hS5EY8Ec4dR5asChI7OVDkG0gIOQ9taRrKPc8hYr7xg1t+Kg3uceSPFLq+ALY1qYQzuNMs0RSKM+0kD+3Mw+rqA0LnqGc9AMi70/Sm/VWv9PFTcRBM4ySxLO7sWd2PVmY8yfM0JeTTs2dcPRVGuzs5GwoCgFmQk8gBzPdWcNTWRzaKeL00j3FRYrUSZ4MtkY58DJCetXBWUD7UbAOPcR9alSmS0uPqmSB+nVHUj96OjfFXou4ndgvEZWKLoXTHHEoXJbAVAAObMenfQkm0LhQqq8RVFCIJLW1mZUHRdboWwO4E8hyox6ja5WuGEsdpfkabXtlRg0eTBMvFgJ5kJnBiY97IwKH3Z76UTUxu9ozSoqSshWMuyiOGGFQW0hjiNRknSvypZM1c7q+C+QWU0HLRMhoWSkMizXq1r1AGENFQmg0oiM0hjGI0bFilkZoqJqYqGsRFGxGlUTUbC1AUM4mo+BqVRNR0L0hjWFqMjalUT0bE9ADOJqLDUrjei0flQFBqNU6NQKPU6vQMNV62kuFRWd2CIis7uxwqooyWJ8AAaFV6SbzScRoLU845C9xcr3PbwaSIj5PK0Sny1VeOO6SQm6QHfXT32Gm1paHDQWeSnHT6s11jtEHqsQIGMFs5wZVchQi9hFGFjjAjjUeARcAfKoLy9SPtzSKmpsanOkMxycfuNR2207eRtMc0TtgnAdc4AyT8hn516sYKK4RySk2wtJnXOkyaRo1sudC6yVQNz7yCOmOXPqMjwRPC5lstEMpOXh5JaXn5sqDlG/hIuMZ7WRk09h2fIthPMUkJuGtUjRUdn4KSg8UqoJ56mPT2QvQ5FKD1KkOpABKyRvG2DnB0sAccjz6cjUJxnaK5jRZdlbVS5iEsepebJJG40yQyqcPE47mB/wDg99EM9VXZ0xiu0PPReo0Ug7vWoE1xye9otSnx4QqxM9eflhslR0RdqzdnqB2rDPULvWRRuH50JM/M++pOJQcjUCNJHoOV6llag5WoGQzPQMz1PK1BStQAPM9AzNRMzUDKaBA8r0JK9Tymg5TQBDI9DSNUshoZ6ANdVZrSvUAeU1OjUOtSpQMMjaiomoGM0TGaAGMT0ZC9LYzRcTUANIno2F6VxNRcTUCGsUlGRSUriai4noAaRvRMclLY3omN6AGKPUyvQCPUyvQMPV6R3zZvZfBdn22ny1XMpb96J8hTCW5VFLuwRFBZmY4VQOpJqr3G8trJdoUdmQ288E0nDdY1IZZYTqI59tCvTo9dOljJztIzytKPLAt/fo8X3gfyPRnoW2ZDLeTG4iRylsktuJoww5yYMqah1BUDUPE0FtvaFncosbtMQr6xwVCktgrjtjn7VaWG0xHJE0f+UXZIzbQqJVj1L2Rw8xKGY8o+WSeyvgK9WcJyxuK4OKOWClbZ9BVQ9+QBdxEZ1NbPr7ZYYV10djPY9p+fLVnv08qym/N7H2NN6uDp0yJFIynIXGWj1ZyQOZJyRQL71xSuZJmmMkiopd0j5qurSoCYGBqbuzzPWuLDo8kJbv4Np6nG1VjKc4NuR1XaFlj9oTK391mqxM9Ue73htlktSXZo1llnkZI3bQyxtHCrDGRzkkb4L41ZrHaUM6l4ZFkUHBK57LddJB5g4I5HxrLVwkmnRrhkmuGGs9Qu9amSoHeuM2N2koeRq1d6gkkoEayvQcrVtK9ByyUDNJWoKVqklkoOZ6AI5moOU1JI9DSNQJsglNCSmp5GoWQ0BZBIaHc1NIaHagDGaxWK9QBlTUqmoFNSKaACo2qdGoNDU6NTAPjaionpdG1ExNSAaRPRcT0rjei43pgNYpKKikpVG9FRvSAbRSUUklKonolJKYhkklTLJS1HqZJKRQxWWucbVREu5xAgWON05YJiEgALL4AZJ7PlV8WSpECt2XA05zjSrDV1BweWfOunTajwyurMc+Lyx2ldm3oXVIYomVGkkMKqwjjdCmhUmTB1BOTKFIw1CzbdCOcW/DdJ7iXTLNIWjaYBZkIAXkVGB3rnPWrZtTZDzpGImVWjlWUcQEL2QcDl5kVpNLdg5MVgTlmZsykuza8ltSnPOQkA8h7uVdkNVh23X7s5ZYMt1f7IrMe9U8StCscaADhop1l4QkaRRrljklTGrc/rD4URs3eYRJFBLbhhAFjJADSaElSR00sBgFkfIz3jmMc3nrV25JMOzySSSWErEkjHM459f7PZre02XN6xJdTGFTKgUpCXwDyORqHl8zRLU4dr4X6+4lgzbl6n+nsc927crJI8oBaLUhYrGIsIMZyFyFJweZJ95rpFuERFSIBY1UaFXoF6j/rmvTRomSvtNgN2FGoDOMkdev76gL1yanU+VJJVR1YcPjvnsnMlRPJUDSVE8lcpsbvJQ7yVo70PI9AG0j0HK1bO9CSvTA1kahJmraV6EkagDSVqFkat5GoaRqANJHoaRq3c0O5oA0dqiY1s1RtQB7NYrFeoA//Z" alt="" class="header__notify-img">
                                            </span>
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dịch vụ tăng người theo dõi Việt Nam
                                                    người dùng thật giá rẻ</span>
                                                <span class="header__notify-descriotion">Khi bạn sử dụng dịch vụ thì hệ
                                                    thống sẽ tăng theo số lượng bạn mua , sub này là người thật
                                                    100%</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed ">
                                        <a href="" class="header__notify-link">
                                            <span>
                                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQDw8PEA8PEBAQEA8PDw8PDw8QEBAQFRUXFhUWFhUYHSggGBonHRUVIjEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQFyslHyUtLS0tLS0tLS8tKy0uLSstLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBEQACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAABAgAGAwQFBwj/xABBEAACAQMDAgMFBQUFCAMBAAABAgMABBEFEiEGMRNBUQcUImFxMoGRobEVI0JywVKSstHhFyQzYnOC8PElQ7MW/8QAGgEAAwEBAQEAAAAAAAAAAAAAAAECAwQFBv/EADYRAAICAQMCBAQFAwIHAAAAAAABAhEDBBIhMUETIlFhBTKR8BRxgaHBsdHhFUIjJDM0UnLx/9oADAMBAAIRAxEAPwCqdM6/LaTpNG2HU/xElXU/aR/UH/zkCvcg45IeFP8AQ8nPjnjn42P9Ue8dN9aWl6qjesM38UEjANn/AJCeHH05+Qrzc+kyYn0tep2YNXjyrrT9CyVynUcnW+o7SzUmeZQ2OIlIaVvog5+88Vti0+TK/KjHLnx4lcmeH9b9XSX0u4/BGmRDEDnYD3ZvVjxXsY8cdPDavmfVnmebVT3SVRRTiK5mj0QihDHBq0yQ1Yg0wJinQExToCAVYBqqEHFOhExVUBMUPhWFgrkcmybPSujehjcRljsRR8LSuniFnxkqo44GfX8a58uo2cGsIWcfr/pI2JVvhIbsyDarDsfh/hIJH410aXP4nASjtKYRXZRAKVDJipoBaVADFS0MFTQwVLQAIqWMWpAlJjAakAUgJQBKQBoANAEoGSgRuzRA89jXblxRlyupjGTQiXDpweR6Hn86xWXJj4M8mlxZOej9jdTXplXaHlC/2RM4X8Kr8RF8uCMlopLhZHX37mq16zfL9fxpvUylwuCoaLHF2+TCayOolIYCtFDsgFFAEVSExxVokNWkBMVVATFOgDiqSETFUkAcU6EK5xWeZ1EDa0aLxJ0Hkvxn6L/riuQEfR3S9p4NnbpjkoHb+Z/iP64+6vKzS3TbOuCpFF9tv/Dtv+//ABLXf8O+ZmeXseQ4r1qMQEUUACKmgBSaGLUtAA1LQxahoYKloAGpYwVLGCpAFICUhkoANAEoESkAaAN9jXfJmCMbVk+SkYWT0rCUPQtMSoKGVqpMVDiqQhqoCYp0ImKdAEVSAIq0IaqESrAOKaQiYqqAOKpIVmvfHAB+eK59T8qBHQ6SfM0n/SP+Ja40ykfT8eNox2wMfTFeQzsKL7W9Kaa1jkXnwyyn5bsFT9Mrj/uFd2gyKE6ZllXFniBWveOawGlQxaVDAamgFNS0MBqWhimoaAFSxgqGApqWMFSxkNSwBSGCgA0hBoGSmBKQjYWb1/Gtll9SHH0HzVWIU1IxWFS1Y0LioooIpoQ4NaJioYVQg1SETFVQBqkARVoQwqkImKtIB0jJ7DNS8kI9WI3IdOkbsB95FQ9TjXcNrNiXpeWVCN8SngjJb+grnzamEo0kxqDsw6Jolxa3OZEBRkZN6OrLngj5jt5iueMrKo+i9Dl32tu/9qGIn67RmvNyKptHVHoZ721WaJ4nGVdSp+/zHz86mMnF2gas+d+qNHe2upImHO4/Qn1HyOQfvr6LBqYPGm2ccotOjnRac7eaj6mnLVY16gkzK+hzYyoVvowB/PFKOrxv1RW1nPngdDh1Kn5jGf8AOtk1LlCMRpAKaljFNQ0MU1DQANSxgqGMWpYEpMYDUAAUDGoESigBQMNAGRlx3oaa4ZKdkVsUJtBQ4bNWnYqJQAaAJiigJTGMKpEsetEIIq0INUgDiqQBqkIw3Um3AHdj+QrLUTcY0u4I6+g2niHz2jGcdyT2AriSso9J0zoS4dQzGKEHybcz/eB/nWEtRBdFZosbOxB7Pl/+y5Y/JIwv5kn9Kh6v0iV4XudGDoayX7Qlk/mkI/wAVm9TNjWOJYLS2SJFjjG1EGFXJOB9TzWEpOTtlpUZc0hlS656V98CyxqplQYKHjxAO2D6jnv3zXTgzKHEuhnOF8lPg0FQBuO0+ahACp8xXXv9EY0bSaTCO+5vq2P0pb2Oio9fQojQqi4GCfM/r91dmkt3ZMiomutiAalgKahjFNQxgNQxi1DGA1IAqWMBqWAKQw0CGFUIhFJoaYtSM3XGa6pU+pijAyVzyjRaYtSUMGppiocVaEGqQBApiDimkARVIBxWiJCKsQ1UgIKtIRiuodwBHdf0rHUY3KNrsCZbehZ0RomfGEnVn+Q45/L8q8+Sbg0jSPU97hYFVI7YHavLOoegCUASgCUASgDzq6k/eP8Azt+pr0I9Ecz6mLxKYikdfNmSH+Vv6V36NcMmRUzXYxC1DGKahjAahjFqGMBqGApqRgqQBUsZDSAFIYQaadCMq1qlZDFZCKiUGmUpGyTWjZApqRiMtQ0NC4qShlpoQwNWmIcVQg1aAIFUkIaqQgirQDVohBFUIfbkEeoIptWmiWDp67dblYjkbtysp88KSP0ry2mnTLR9DdFKBZQ4YtwScknBycj5AdsfKvMz/wDUZ1w+U7tZFEoAlAEoAIoA8ruZvjf+Zv1r0V0ORmPxaYFO60fMsf8AKf6V6OjXlZLK2a6mApqGMU1DGKahgA1DKFNQwBUMYpqWAKQyUgJikBKQBRsVUZOLBqzdjIIzmu/HtlG0znlaZrK2K85SaN2hw1XdiolICUDJiigIKaAcGrQhxVokIqkA1WhBFWhMIqkAwq0SZUq0SzUun2SK/Yghkb5jy/0rg1EanbKi+D2P2XXUkjH48RtEkhj7je2MEenGfyrztUlSfc6cVno9cJsSgCUASgAigDzHQ9NF3NIrOUVT3ABJJJx+lduTJsSOaEd1nL1CMwyyREgmN2Qkdjg960i7VkNU6Kj1S+ZU/k/r/pXp6P5GJnDNdLAU1LGKahgKazYxTUMYtSxkNQxiGoYAqRkoANAiU6ABFS1Q7BSGbDpiqlBohOxKgoYNTsVBFUAwpoRKYDCmgGFWhDCrQhhVoQatCGq0AwqkSZFq0SzHfpuTkZAOT/nWGpjcBR6ln6A1aaNo1i+3GUiXP2XRzgK34fkK83JGMotM6IN3we9r2ryjqDQBKANK91a3h/4s8aH+yWBb+6OauOOUuiE5JFM6g673kw2TFSoy0pUbiDnAVWHA+Z5+ldePS1zNGTy3xEp9trD2zF0m8NiOcYYn7sGulaWWT/aYKW3ucq710EswDOzEks5xknufU11Q0T7sW5HCvLlpXLtjPAAHYAeVdkIKEaQGs1DGLUsYpqGMU1DAU1mxgqWMBqWMWoABqWhimpAINCYDirENiqokUx1Lx+hW42CatsgxstZOJSYhqCgg00A4NUhBqhDCqQDCqQhhVoQ1WhBFWhDCqQDCrQh1qkSZUNUQ0bWiN4ErMDhX2kHzR1OQR8ua48um7x+hUMldT1Wy9o0YQeNFlgOWiddrfPB7fnXlvQzb8v8AQ6vHjXJp3/tJc8Qwov8AzOS5/oP1rfH8Lk/mZlPWRXQrmodVXc2d874P8KnYv91cD8a7cfw/HHqc0tXN9Dhy3BPc12RxQj0Ri5Sl1ZqSPWlFRRqyGg1SMDmky0YjUsoVqhlCVDGKalgKahjAahjENZsYDUjJSAWpABFS0AKkoZWqoyE0ZRWyMx8VdCJuzWF2VQ8MLyMqRo8jscKkas7sfQKOSfpSbGbNzo13GpeWzu40Hd5bWeNB9WZQBUbovuvqOmY9L0qe6k8K2heZ9pcqgBIUdyc8Acj8RSk1HljXJrFSCQQQQSCCCCCOCCPI1SA6nT+gXN88iWyK7Rp4j7nVMLnHn3pSyKHUEr6HNU5GfvrYkcVSEbNzZTRBGlgmiDjMbSxSRhxwcqWA3DkdvUVUZJ9GIZbKbwvH8GbwQcGfwpPBBzjHiY25zxjNUpK6vkDCK0QhhVoR0IdFvHVXSzvHRgGV0tbhlZTyCGC4I+dLxca4cl9UFP0Yl1p1xCA01vcQqTtDTQSxAnGcAsBk4B4q4ZIS4jJP8mmS0/QwK1akszI1Mhoyq9MhxMgkpkuJPEpi2jpbyujukUrpHzI6RuyRjv8AEwGF++pc4ppNq37lqL9BbDTp7lmS3heZlUuwQZwo8/8ATzpZMsMaubouMG+iDe6JcRW0N46AQTttjbepYnDHle4+yaiOeEpvGnyjTY0rOQxrQaENSximpYy22nQErWIv5rq3tUaMyxpLuJePGVJI7ZGMAAnkfSuGesisnhxi2aKHF2U3NdDIAahjFNQximpYCms2UgGpAFAEoAmKTVgLioGOj4+lXCe0TVmyvI4rrjTVoyfBgrgNixez5v8A5aw/64/wtU5X5GOK5RdepvaPe2OrXUJMctpFJGpgaNQ3hmNGba453fETzkVjDBGUE+43NpnYt+nxBrwNlKbWO70+W4KpHGyhlkjVlCsMAHercdiD5cVDneLzc0yq83BS9C6JFzHPf314tra+PKomfYHmcSFWbJ+FctkeeTnj12llpqMVbIUe7Lf7PtAhs7+5S3vYbyOayDqYyN6AuMb9pI5zkEHnB4HGcs03KKtVyVFUyvJ7N7eS3lFpqcV1eWyZmhTYULDuowcryCATnn0rb8Q0/NGkydi7M8+BrsRmenaTE2saC1quGvNPdfAyQCyc7Bn0KFk+qA1ySaw5t3ZmnzRoydbqkK6ToEbkLvt/eXXGS0jhAcepZpHx67arT29+Z+9ff7CnxUTlL0PF+2Tpnjy+GIvF8XCb87A2MYx51r+Jfg+JQtnm2lS1O2EM88IJIimliBPchHKgn8K7cct0U/UzfU9G9lXUt3NdR2ckoa3itWEcfhxjb4exV+IDJwPU1wa7BjjBzS5bNcUndFc1rWL/AFO5Fi8gkHvbrAmyNArBmQEsozgKTnOa68WPFgh4iVccmcnKTovFr0rAkkNp77Ym8iVcg2VoZwgGfhB/iA5ywY+fzrhlqZtOeyW1+7r7/KjRQXS1ZxLToCOaTUl96ZDazBFd1jCHMayMzgAYA3HtgcV0y18oKD29V/NcGfgp3z0NbWejIEs5L2yvVu0h/wCMBsOAMbiCp4wCDg+XnWuHWzeVY8kNrfQmWJbd0XZsw9BQpDEbzUI7W4uAPBibZgE4wpyQWPIzjHJ86l/EJuT8PHaXVh4CS8zpnH656dTTpYYkleTxIi5LhRghscY8q6NHqXni21VMnJiUGdfotv8A4bWv+m3/AORrn1f/AHWL77l41/w5Gr7KY5XublYrhoP93JYqkb7sMAOGGOMk1XxKUVCO6N8hgTt0yxW3Tz6lo+kxb9qiQyzycFgmJQcA92JYD781yS1CwanJKvZfsaqO6ESpaf0bBcTXbx3ZTTrQ7JLyVVJkcDLBAMDHz+Y4Oa656uUIxTj55dv7kKCbdPgwdR9HxxWnv9lde92oYJISmySIkgAkeYyR5AjI7ijDq3Kfh5I1IJQpWmVnTIoXniSeQwws2JZVG4ouO4GDn8K6MjkotxVslL1PVOvdHtJrHS4kuWMqwrFpq7OLsssKjcdvw8bD5faryNNlnHJNuPF+b26m00ml+xyv9mNoskVrJqqLePtZoAIwWTuwRSd2cA4J747Vf42bTkoeX1F4a6XyJF7MIXl1GIXjp7oYlSSRY9h3wrIWk+Q3HtjgUnrJJRe3r/cfh9eTma70HbrYy31hqC3qW4JnUeGQAMFipU8YBztPl5+tQ1EnNQnGrE4KrTOxqHswsLeSNZ9V8ETALEsvgrI8mecE4G3leMdz3rJavJJcQKcEu5wT7Nbn9qfs7xV2eF7x71sOPA3bc7M/b3cbc/POKv8AEx8Pf+wtjujt2Hsu0+4eQQasZlhBWZYvAaRJM8ZIyNvDeXcd+9Yy1E11iVsXqV7pHoaK5sv2jfXi2VqxKxk7AXIO3JZ+AN2QBgk48qvJlcZbYq2JRtWze1/2bLDa2strdG8kurmOCHaEWB0kDlWBGfJQSckdzShqLk1JVQnA2B7NbTxPcv2sv7R258Hwv3W7bu2575xz3zjnbS/ESrdt4HsXSzz7ULGSCWWCVdskTtG474YHHB8x5g+hrqVSVoz6Goy4qGmik7IDStoDcmiB5X8PKunLii+YGUZPozpdFXKQ6nZSyuscaTBndzhVGDyT6VxZYva0bRfJ6DrNp09Jey6lPqYn3ukhtYmV1ZlVVAIQFmHwjjI+fFYReVR2qJT23dmHp7ruG41yS8uZEtbZbKS3txMyqAPEjYbj23thj9wHOM1UsTWPauXYlLzGvpGs6dfae2l39w1qYbmWa3uBgI6mR2U5IIBxIwwe4wQc9m4zjLfFWFpqmdDpO60bT7ycW18SjWex5JyqxtKGGPDbA3E8kjGBxg98LIsk4q13Gtq7ld9j2qW9pdTPczRwI1oUDSMFBbehx9cA/hWupi5LyruTB11KYTyfqa6kQyz+zvqEWF8kjnEEitFP3OFPKtj1DAfcWrPPj8SFLqOLpmhea68uoHUGGW95S4CE9ljcFEz8lVV+6to40sexelEt82en/t/Rve/2z74/jeB4fumBvzjH2MZzjjvt881w+Fn2eFt4vqa7o3us8lvrkzTTTEbTLLJKV743sWx+derBbUl6GDLT7LtQhttQ8WeVIo/AlXfIwVdxKYGfuNYayEp4qir5KxtKXJzNN1YW2pi7A3pHdSyYX+KNmYHHz2scVvLHvw7PYlOpWehJJoZ1BNU9/wD3jsHEJOFWQpt3MCu5Rj1OM/hXn/8ANeF4Ozj1NfJu3Wat5r1oYeoVFzETct/u4Dj98Pd0X4fXkEVpDDk3YXtfHX25YnJVLnr/AGOH0jqcEel6xDJNGks0LrCjMA0jGJwAo8+SK6dRjlLPiklwnz9SItKEkd3WL3RtUjguru7a3lii2TQA4ZlHxMoG0k8lsFfI/hz4o6nTtwxxtN8P7/kqeyauTNL2zEe82mO3uxx9N5rT4V8kvzFn6ox+z69tBY6ja3V1Hb+84QFmUNtKFSVz3xT1scniwnCN1/cMbW1ps3OkpNO07UJgmoRywvZj987IB4pk5QEcZwAfvrPU+NnxK4U76e1FQ2xfU29A63trPTdMi3xyMXEV1GGzJDEd+XK/I7fuJrPNo55c2SVV3Xv0HHIoxSMem63YWb3tjDfLDb3Tm5tbu3KyC2kYBWibggYMakZ4wcZFGTFlyqOSULa4aff3/cIyjG0nwcnrHX4lsjaJqc+oTykeLKNiW4QMGxgDBPAGAT5knyrTT4ZeJveNRS+opSVVdnnJrvsyPQuo+pYEj6dlhkjmeyjRp4kYFkKpACreh+Fhz5ivPxYZN5VJVfT9zVyXlrsdqebQZr+LVjqDLIXhc25OB4qgKrOpXcoGFzzj4fTvzpaiON4tv6leS91ia11HZPF1Cq3UDG5jQW4Dj98fdVQhPX4gRShimnjuL46/UbkqfJVui9Wt4dK1uGWaOOWe3dYI3YBpWMMi4UeZyQPvrbNCTywaXR/yTFpJl69oml6Tc3NuL+8a1lSEHbuCpNAWPw7mUgHIbtzz9McmCeWMXsVlySb5Zyv9pFp+2N3xe4+6+5+NtbO/fu8TH2tn8PbPnV/hpeH79Q3qzP0gdA0uadoNTV2mj2r4si+HHGDkIGCgFuR3OcL9czl8bIlcQTiu5X+m9S0y+0aHS9QuTZyWr74pMhQ3LbSCwKnh2UqefMVpkhOORzgrsSaaplk1fUrbT9I0m4si1xbW1+u1m4eVf94SYjIHJJkxwB28qwUXObUurRTdLgM/VVi8rXn7fnW3Zdw06ONFmV9uMDK7sZ5xjv8AxYprHKtuzn1BtdbPI9Zvjc3M9wd/72RmHiMGcL2UMRwSAAPur0YR2xSMG7dmptzWm2+orMZhPlzWTwy7FKaMkcmOPKphOuAaC3NOXIkYyKzaKOr0xrrWE5uFhhmJjeLZOpZQGxyPQ8Y+hI86icdyopOjllskngZJOAMAfQeQq0INUIIpoBhVCGFUhBq0IufTVjealZHT7e3thFFN4z3cgKMGbJClgCSefIdgBxWGSUMU98m/yKSclSNXqjo2404RGaSBxKWCeEzlvhAJyGUccj8a1w6iOW6TIyRcepxBFXRZi5gaOrTGpGMiqTKJmqsA5p2BdfZ1fW7SCxl0+3uXncuksm3IKKX2tuB4+E4x69jXDrYzS8SM2q7GuNro0J7UEuzeI92sKb4sQRwyNIEjVj3YquWJJPb9KegeNY2oX72Tlu+SoCOu2zHcBkosakYmFFlCGkMBqWMyWds0ssUKY3yyJEm44Xc7BRk+QyRUSkoptjSs6/U/R91pyxNcmEiVmVPCkZzlRk5yox3rnxamGVvbZTi49SvmtbEIaljFccVDAsvX/VC6ncRTJC8IjgEJV2ViSGZs8fzVy4cTxpps0k7KvmtbJJQI7fSOswWc7SXFlFeRuhjKSY3IDwWTIK5IJBBH3jnOeSDkqTopOjo9a9YLfRQWltbLaWdud6QqVyz4IBIXhQNzcDPcnNZwwuNtu2Nysp9WBljf1rWE+zIa9DOorpSM2zIBWiiSaleYdAwammKiGmADSAFIYwpoAiqEMKoBhVIQc1aEfRvQnTzafZC3Z0eQvJKzoCFJbGO/PAAH3V4+fL4k7OiMaVFC1Ho7Uri7FtLeC6aOJZ2lldlWMSuykKpyeTF2Ax27V3w1GKENyjXb6f8A04545yltv7+0b7+yuQKSt3Gz44Uwsq5/m3H9KlfEI3zH9yXo5/8Akvp/ko95pMqTG2MbeMH8PwwMsX8gPXPrXfHJFx3XwcsXJS2vqWqz9ktw6BpbqKBiM+GsTTY+Rbcoz9M1yS+IwT4jf7HoRwSrllZ1Do26ivxp6GOeZlDgxthVQ/xSZ+xj5+oxnIrqhqoPH4j4QnB3RaP9kE+zPvsPiY+x4L7M+nibs4+e2ub/AFON/K/r9/1L8F+pyOh9OltddtredNkkbTBh3B/cSEEHzBHOa31WSOTTOUenH9UTBNTSZfut+jZdRuYXWVIYo4SrOyl2LFs4CAjyHckd68/S6uOCDTVtsvLic3wykdSdDTWKiQus0RIUyIpQqx7blycA+uT+lehg1kcrqqZw58csSt8ox9PdD3F8C6lYoQSPFcE7iO4VR9rH1Aoz6yGLh8v0DBjllVrobWu+yy6hjaSCZLraCWjEZikIH9kbmDH5ZH31nj+Iwk6kqOrwJRXWylaNo895OtvbpvkbJ5O1UUd2Y+QGf/ZrryZY447pMUU3wi+H2Oz7M+/Q+Jj7HgPsz6b92fv21wf6lG/lf1NfBfqVC00mez1W0t7hNki3doeDlWUyrhlPmp9fr510yyRyYpSj0p/0M0mpUz0b20W5kjsVAJPiy4AGSSVXgV52gfMh6qeyKZVNT9nD29obu5uooAEDGIozvuP2Yxg8se34+QzXQtWpT2xVkqElHdJ0efmumxoFSximpYxDWbGDNK6GOKoQaoQGTNJwsEzHisijNDLjg9v0rfFl28PoRKN9DeVeK9KMbVo52zn14p1koAgNABoAFABFMA0xDCqQDA1QgiqTEe6ezPUZG0pWkkeR99x8cjs7YDHHxE5rzNSksvC9DeHylN6Et767laVLuWPbGIpbh3eR9jc7Fyck8Z7jHfz57tRPHBU4/oefCGSbtSr3PROnYreCZ40vZbibafER5N4GCMkjHDAn1zzXFmlKcU3BJF4IQx5GlkbfpZqRRodekcgbktFkX+c7Uz/dJH31Tk/wyXuXGK/Et+xT/arrdx76sKzSxxxxRsqxuybmbJLHB5PkPTFdWhxw8Pc1yXlk91HS9j8m839zIxknd4kaRzucrgnv8zj+6Kz+IOtsV0NMPdm8bWzTUDevrZ8ZZWLQtcwBAoODCVzwoHGP61G/I8WxYuK60/qOluvcYtQv7ebX9MmglilPgzpI0Tq4GElKglT3+I1UIzjpZqSrlfwJtPIqMXtR1OZZraNJpETw2crG7Jl92ATjvV/D4RcZNo5tZJqkmWaS4M+j7pjlms1difNgoIb65ANc8Vt1NR9RZ5uWkbfXbf7A1u4NtpDeASpSCJEZeCAxVSwPr8ROfWljXiajzerLb8PTrb6Ir/sp1SZjdxSSPIieE6b2ZirNvDAE+R2jj5fOt/iEIra0vUNJNu0zp9HW0UV7rDoAC12i8eSmNZCB6DdI/wCFYaibljxp+n81/B0wSTZQU6ku/wBvh/Glwb8Wxi3v4fgmXwtuztgLz27813eFD8PVdr/WrMtz3lv9paobnRZuPEW/ijz5lC6MfwKj8TXJpG9uRexc+qLleW8MssE0gy1uXaIHG0O+Bu+oxx9fpXLGTSaXccoptN9jy32wXk/vKJIf3GzdbgZ2k8B8+r5/Ij1NehpFHZx17nLljKWTnp2PMXPNdNmqQM0WMBpAAikwEIrJqigA0k6Ayqc1tF2QxwKtIQWjzRLHuBSowMpHeueUXF0zROxklYcAkCrjlnFVFicU+qJWQyUASgCUASgCCgBqYBFUINNAMKoR6V0P1La29gIZZ1SQPMdhDk4YnHYVxZ8U5ZLSNIySRq+zjqWK2WSCZhGHZZEkOdu7aFKsR27DB+ta6rFKdSiY4pKPDLBaazpdrOWikBeUtvlUvIkanLHn0JA4GT2rOUM+SNPsRFYoStdWcLWeqVj1NbuBhKgjRHxkb1wQy8jv2P1ArfHgbw7JcMTlWXcjr6hqWkX4SSeRAyDA3u8MgHcqcEbh9M/KueEdRhbUV/J03CXLOHbdT2tlfu9oGNrKiJMqKVAdMgPGG5PHfPfJroeDJlxVP5l0/wAi3KMuOh0r8aJcubmSZAz/ABOBJJGXPqU75+grKD1WNbEvv8yn4b5OBpuoWcOrxzwMY7VS5yysApMTKcD7WMkd+ea6pxyy07jL5v8AJmtqna6Fsvta0q9lCzupMQHhysZI0YHkruGPPyP3VyQx6jFG49wyeHN+YxdU9XxND7rbMGU7Vd1GEVBjCr69h24xWmm00lLfM5tTNSjsiNoXV8D2/ul2QFCeEGYEo8eMAMR9kgcZ+VGfTTU9+MeDItmyf5Df/wBFpunROLVlkdzu2Rs0hduw3OeAB9fXis3hz55efj79Doi4QVRKj0x1e9tdTSzZdLpt0+3ur5JDKPlkjHp9K69RplOCUeq6BCdPktXv+iif9oeLD432s7pd27GN3g/2sfL864dup2+HTr77mtwuyq691WLy/tJOUtraaIpu748RS7sB8lHHoPnXXiweHjku7RnKVs6ntD6pjnjt1tLrcUmMjiPeuCoBjJyBnByR86y0uFxb3oc2mbWq9RWOpacsdxOkNzt3qGV/3c68ZBAPwtz9zeoqY48mLJcVa/gG00eXmuxkimoGQGmmKg0ATFACMtZuNFJgBpJ0BnjbP1rphJSM5KjMordIhscxBhg/+qt4lNUydzRqvbMD2J+YFcc9Nki6Ss2WSL7iVzlkoAlAEoAlAEoAIoANMAiqEGqAYGmIdXqkyWjIJaZO0BkqrBRF3U7KoOaqwJmiwDTsQyvRYmjKJqVkOArTUWCgYmeiy0hCaLKFNSwFNS2MFKxkJosQKQCkVLRViGsxhVqakJoyAVoSHFUkIR4/MVnLHXKKUjGKzso27eUHg9/1rtwZVLh9TGca5RuotejCBg2ZgtbEWcSvmj0CUASgCUASgCUASgA0AEVQBpiDTsA5qhBzTsA5p2IOaqwJRYBzTsKJmnYiZp2BM0rAhosBc0rHRM0WACaAJUsBDUMYM0rGGqsRKQCstJqwTExWZQyNiqjKhNHa0/QnnVGSezUucLHJcqkuc7QNmM5J7fUVz5/iEMMmnjm67qDa9ev9So4XJfNH9Xyal5aNDK8T7S0bFG2ncu4d8Gu7T5Y5scckbqSTV8PkxnFxk4vsa0kGeR+FOeC+YhGfqa9cpqb1nd9lf7m/zr0tNrP9k/r/AHOfLi7xOqqV6FnG2V6vnT1CUASgCUASgCUASgCUAGgAg0wDVCJmnYBzTAOadiDmnYEzTsA5p2ImaLAmaLAOaLAGaLABpAClY6JmiwJTsQDSAQioZQM1NjGBq07JGApiIVzQ42F0YmGO9ZOLTouy2watDpfg27xySPsW5uWiKhkmkX92Bu4bYhyAeCzZ8q+fywnrN81Kle2KabW1PzXTVb5Km1ztVdzsi1iqLXu/zrj6L9znajp4in2eJvjdUmjlPBeORdysc+fr86+i0mqln0/iKFSTacfRp00vb09jz80PDlV33T9UxrW3h3fHIQmOSoDMPoMjP4jvRqNTqMcNyhVevTp69hYMfjZFBdzUurMMTtPPkfX/AM9a71gWfEsiq2u3RkbpY5bZJ/r1OaykEgjBHevOlFxdM6E01aNiG+kQbQRgdsjOK2hqckFSZlLDCTtmvWBqSgCUASgCUASgCUASgCUASgA0wDmmINOwJmnYBzTETNABzTAmaAJmiwJmiwDmnYAzQADSYC1NjCGp2Kg0wJSARlqGhpiipGZUbNaxlZDQ4FaokJQEYNVtT6iujp3F7azCNry3mkmjRY/EgmEa3CIMKJQRkHGBleTXh5Ph2fDJ+DOO1ttbot7W3bqmrV80+nqdkc0JLzJ37Pr+f+DDNrZklmldMb4xFHEnEccajaq+uAPP5n143wafwIwjF3T3Nvq3dt/q/oaQ1CXibl80XGl29Pp+/wCRvxalHJu+FgGCq4AXdjAU/kOD+ld2DRPNFXNOr4fvX9Xd/m6OjL8Vxw37Mbi5Jcprqr9uyar/ANVZmuXgKRiGOSNh9vdIXUjA7ZPHOT99d+l0uTDcZuLj0ikqa69X34pfpZ4mp1Cyy387n1NWa23jG4qfIj+vqKvPp8eRdOTnjnlB+xw57d0YqwOflyD8xXlzxyg6aO6GSMlaZ//Z" alt="" class="header__notify-img">
                                            </span>
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dịch vụ tăng likepage giá rẻ</span>
                                                <span class="header__notify-descriotion">Khi bạn sử dụng dịch vụ thì hệ
                                                    thống sẽ tăng theo số lượng bạn mua , sub này là người thật
                                                    100%</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed ">
                                        <a href="" class="header__notify-link">
                                            <span>
                                                <img src="data:image/png;base64,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" alt="" class="header__notify-img">
                                            </span>
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dịch vụ tăng view video</span>
                                                <span class="header__notify-descriotion">Khi bạn sử dụng dịch vụ thì hệ
                                                    thống sẽ tăng theo số lượng bạn mua , view này là người dùng ảo
                                                    xem</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed ">
                                        <a href="" class="header__notify-link">
                                            <span>
                                                <img src="data:image/png;base64,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" alt="" class="header__notify-img">
                                            </span>
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Hệ thống hỗ trợ dịch vụ SBGroup</span>
                                                <span class="header__notify-descriotion">Hệ thống chuyên cung cấp các
                                                    dịch vụ seeding facebook giá rẻ . Hotline : 086.6699.365</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>

                        </li>
                        <?php
                        if (isset($_SESSION['auth'])) :
                            echo '<li class="header__navbar-item header__navbar-user">';
                            echo '<img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t31.0-8/21427195_674848616045485_5367077445336386955_o.jpg?_nc_cat=109&_nc_sid=09cbfe&_nc_ohc=gBH1tekDbgAAX8rieRx&_nc_ht=scontent.fhan3-1.fna&oh=eace6e09da71c682fcf75f8ebddaf97b&oe=5FA6F55C" alt="" class="header__navbar-user-img">' . $_SESSION['auth']['username'];
                            echo '<ul class="header__navbar-user-menu">';
                            echo '<li class="header__navbar-user-item">';
                            echo '<a href="">Tài khoản của tôi</a>';
                            echo '</li>';
                            echo '<li class="header__navbar-user-item">';
                            echo '<a href="">Địa chỉ của tôi</a>';
                            echo '</li>';
                            echo '<li class="header__navbar-user-item">';
                            echo '<a href="">Đơn mua</a>';
                            echo '</li>';
                            echo '</ul>';
                            echo '</li>';
                            echo '<a href="logout.php" class="logout">Thoát</a>';
                        else :
                        ?>
                            <li class="header__navbar-item">
                                <a href="register.php" class="header__navbar-item hearder__navbar-item--strong header__navbar-item--separate" style="--white_color: white">Đăng ký</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="login.php" class="header__navbar-item hearder__navbar-item--strong " style="--white_color: white">Đăng nhập</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <!-- header-with-search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="/" class="header__logo-link">
                            <div class="header__logo-img">
                                <img src="https://i.imgur.com/gAA1F1W.jpg" alt="" style="width: 60px">
                            </div>
                        </a>
                    </div>

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Nhập thông tin sản phẩm">
                            <!-- search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Tăng người theo dõi giá rẻ</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Tăng like giá rẻ</a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <div class="header__search-select">
                            <span class="header__search-select-label"> Trong Shop</span>
                            <i class=" header__search-select-icon fas fa-angle-down"></i>
                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item--active">
                                    <span>Trong Shop <i class="fas fa-check"></i></span>
                                </li>
                                <li class="header__search-option-item">
                                    <span>Ngoài Shop <i class="fas fa-check"></i></span>
                                </li>
                            </ul>
                        </div>
                        <button class="header__search-btn">
                            <i class=" header__search-btn-icon fas fa-search"></i></button>
                    </div>
                    <!-- Cart Layout -->
                    <div class="header__cart ">
                        <div class="header__cart-wrap">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">3</span>
                            <!-- No cart : header__cart-list--no-cart -->
                            <div class="header__cart-list ">
                                <img src="./assets-css/img/cart-empty.png" alt="" class="header__cart-list--no-cart-img">
                                <span class="header__cart-list--no-cart-msg">
                                    Chưa có sản phẩm
                                </span>
                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                <ul class="header__cart-list-item">
                                    <!-- cart item -->
                                    <li class="header__cart-item">
                                        <img src="data:image/jpeg;base64,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" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Viplike có avatar</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item--price">1.300đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>

                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại: Viplike theo tháng</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJOfuPauFRrHzmDXdwQfjyNqwFesS9CSvKTQ&usqp=CAU" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Viplike có avatar</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item--price">1.300đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>

                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại: Viplike theo tháng</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="https://tangdonhang.net/wp-content/uploads/2019/11/dich-vu-tang-like-fanpage-facebook.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Viplike có avatar</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item--price">1.300đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>

                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">Phân loại: Viplike theo tháng</span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="fas fa-list"></i>
                                Danh mục</h3>
                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item__link">Trang điểm mặt</a>
                                </li>
                                <li class="category-item">
                                    <a href="" class="category-item__link">Trang điểm môi</a>
                                </li>
                                <li class="category-item">
                                    <a href="" class="category-item__link">Trang điểm mắt</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="btn home-filter__btn">Phổ biến</button>
                            <button class="btn home-filter__btn btn--primary">Mới nhất</button>
                            <button class="btn home-filter__btn">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-angle-down"></i>
                                <!-- List option -->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/14
                                </span>
                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn-disabled">
                                        <i class="home-filter__page-icon fas fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn ">
                                        <i class="home-filter__page-icon fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="home-product">
                            <div class="grid__row grid__row-wrap">
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <!-- Product item -->
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/d803e1a982b8b1ce023fc1480048e409_tn)"></div>
                                        <h4 class="home-product-item__name">Hệ thống hỗ trợ dịch vụ facebook</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.200.000</span>
                                            <span class="home-product-item__price-current">200.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="far fa-heart home-product-item__like-icon-empty"></i>
                                                <i class="fas fa-heart home-product-item__like-icon-fill"></i>
                                            </span>
                                            <div class="home-product-item_rating">
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class=" home-product-item_gold fas fa-star"></i>
                                                <i class="home-product-item_gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sbgroup</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link ">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">5</a>
                                </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">14</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="grid">
                <div class="grid__row grid__row_footer">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item_link">Trung Tâm Trợ Giúp</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__item_link">Sbgroup</a>
                            <li class="footer__item">
                                <a href="" class="footer__item_link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item_link">Giới thiệu</a></li>
                            <li class="footer__item"><a href="" class="footer__item_link">Điều khoản</a></li>
                            <li class="footer__item"><a href="" class="footer__item_link">Tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item_link">Trang điểm mặt</a></li>
                            <li class="footer__item"><a href="" class="footer__item_link">Trang điểm mắt</a></li>
                            <li class="footer__item"><a href="" class="footer__item_link">Trang điểm môi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="" class="footer__item_link"><i class="footer__item_icon fab fa-facebook"></i>Facebook</a></li>
                            <li class="footer__item"><a href="" class="footer__item_link"><i class="footer__item_icon fab fa-instagram"></i>Instagram</a></li>
                            <li class="footer__item"><a href="" class="footer__item_link"><i class="footer__item_icon fab fa-linkedin"></i>Linkedin</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="assets-css/img/QR-code.png" alt="QR-code" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__download-apps-link">
                                    <img src="assets-css/img/CHplay.png" alt="CH-play" class="footer__download-apps-img">
                                </a>
                                <a href="" class="footer__download-apps-link">
                                    <img src="assets-css/img/appStore.png" alt="appStore" class="footer__download-apps-img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid">
                    <div class="grid__row grid__footer">
                        <p class="footer__text">© 2020 - Bản quyền thuộc về Công ty cổ phần Truyền Thông & Công Nghệ SBGroup</p>
                    </div>
                </div>
            </div>

        </footer>
    </div>
    <!-- Modal layout -->
    <!-- <div class="modal">
        modal_overlay là lớp phủ màu đen
        <div class="modal_overlay"></div>
        <div class="modal__body">
            Authen form
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <span class="auth-form__switch-btn">Đăng Nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Nhập email của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">Bằng việc đăng kí, bạn đã đồng ý với SBGroup về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__controls">
                        <button class="btn btn--normal auth-form__controls-back">Trở Lại</button>
                        <button class="btn btn--primary">Đăng kí</button>
                    </div>
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với google
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>