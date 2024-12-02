<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="{{asset('public/assets/img/favicon.ico')}}">
  <title>Evote | Musycab</title>
  <link rel="icon" type="images/x-icon" href="{{asset('public/assets/images/evote.png')}}" />

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->

  <style>
    @charset "UTF-8";
    /**
    * Stisla
    *
    * Stisla is a clean & modern HTML5 admin template based on Bootstrap 4.
    * Stisla will make it easier for you to create your own admin interface.
    *
    * @package	Stisla
    * @version	2.3.0
    * @author 	Muhamad Nauval Azhar
    * @url 	https://getstisla.com
    *
    */
    /**
    * TABLE OF CONTENTS
    *
    * 1. Variable
    * 2. Mixin
    * 3. Bootstrap Override
    * 	  3.1 Misc
    * 	  3.2 Form
    * 	  3.3 List
    * 	  3.4 Alert
    * 	  3.5 Card
    * 	  3.6 Table
    * 	  3.7 Tooltip
    * 	  3.8 Modal
    * 	  3.9 Nav
    * 	  3.10 Pagination
    * 	  3.11 Badge
    * 	  3.12 Button
    * 	  3.13 Media
    * 	  3.14 Breadcrumb
    * 	  3.15 Accordion
    * 	  3.16 Popover
    * 	  3.17 Grid
    * 	  3.18 Navbar
    * 	  3.19 Dropdown
    * 	  3.20 Tab
    * 	  3.21 Progressbar
    * 	  3.22 Jumbotron
    * 	  3.23 Carousel
    * 4. Theme Style
    * 	  4.1 Misc
    * 	  4.2 Section
    * 	  4.3 Page
    * 	  4.4 Layout
    * 	  4.5 Animation
    * 5. Responsive
    *
    */
    /* 1. Variable */
    /* 2. Mixin */
    /* 3. Bootstrap Override */
    /* 3.1 Misc */
    @import url("//fonts.googleapis.com/css?family=Nunito:400,600,700,800");
    .btn:focus,
    .btn:active,
    .btn:active:focus,
    .custom-select:focus,
    .form-control:focus {
    box-shadow: none !important;
    outline: none;
    }

    a {
    color: #6777ef;
    font-weight: 500;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    }

    a:not(.btn-social-icon):not(.btn-social):not(.page-link) .ion,
    a:not(.btn-social-icon):not(.btn-social):not(.page-link) .fas,
    a:not(.btn-social-icon):not(.btn-social):not(.page-link) .far,
    a:not(.btn-social-icon):not(.btn-social):not(.page-link) .fal,
    a:not(.btn-social-icon):not(.btn-social):not(.page-link) .fab {
    margin-left: 4px;
    }

    .bg-primary {
    background-color: #FFC857 !important;
    }

    .bg-secondary {
    background-color: #cdd3d8 !important;
    }

    .bg-success {
    background-color: #47c363 !important;
    }

    .bg-info {
    background-color: #3abaf4 !important;
    }

    .bg-warning {
    background-color: #ffa426 !important;
    }

    .bg-danger {
    background-color: #fc544b !important;
    }

    .bg-light {
    background-color: #e3eaef !important;
    }

    .bg-dark {
    background-color: #191d21 !important;
    }

    .text-primary, .text-primary-all *, .text-primary-all *:before, .text-primary-all *:after {
    color: #FFC857 !important;
    }

    .text-secondary, .text-secondary-all *, .text-secondary-all *:before, .text-secondary-all *:after {
    color: #cdd3d8 !important;
    }

    .text-success, .text-success-all *, .text-success-all *:before, .text-success-all *:after {
    color: #47c363 !important;
    }

    .text-info, .text-info-all *, .text-info-all *:before, .text-info-all *:after {
    color: #3abaf4 !important;
    }

    .text-warning, .text-warning-all *, .text-warning-all *:before, .text-warning-all *:after {
    color: #ffa426 !important;
    }

    .text-danger, .text-danger-all *, .text-danger-all *:before, .text-danger-all *:after {
    color: #fc544b !important;
    }

    .text-light, .text-light-all *, .text-light-all *:before, .text-light-all *:after {
    color: #e3eaef !important;
    }

    .text-white, .text-white-all *, .text-white-all *:before, .text-white-all *:after {
    color: #ffffff !important;
    }

    .text-dark, .text-dark-all *, .text-dark-all *:before, .text-dark-all *:after {
    color: #191d21 !important;
    }

    .font-weight-normal {
    font-weight: 500 !important;
    }

    .lead {
    line-height: 34px;
    }

    @media (max-width: 575.98px) {
    .lead {
        font-size: 17px;
        line-height: 30px;
    }
    }
    h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
    }

    p, ul:not(.list-unstyled), ol {
    line-height: 28px;
    }

    .shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    }

    .text-muted {
    color: #98a6ad !important;
    }

    /* 3.2 Form */
    .form-control,
    .input-group-text,
    .custom-select,
    .custom-file-label {
    background-color: #fdfdff;
    border-color: #e4e6fc;
    }
    .form-control:focus,
    .input-group-text:focus,
    .custom-select:focus,
    .custom-file-label:focus {
    background-color: #fefeff;
    border-color: #95a0f4;
    }

    .input-group-text,
    select.form-control:not([size]):not([multiple]),
    .form-control:not(.form-control-sm):not(.form-control-lg) {
    font-size: 14px;
    padding: 10px 15px;
    height: 42px;
    }

    textarea.form-control {
    height: 64px;
    }

    .custom-control {
    line-height: 1.6rem;
    }

    .custom-file,
    .custom-file-label,
    .custom-select,
    .custom-file-label:after,
    .form-control[type=color],
    select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 6px);
    }

    .form-control.creditcard {
    background-position: 98%;
    background-repeat: no-repeat;
    background-size: 40px;
    padding-right: 60px;
    }
    .form-control.creditcard.paypal {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MzhDMkFERDA5N0ExMUUzOEU3NkI3REVBNTBBQTM3QyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MzhDMkFEQzA5N0ExMUUzOEU3NkI3REVBNTBBQTM3QyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+pzjbbwAABEdJREFUeNrsWGtsk1UYfnpd13Yd68boXOmAgnO4VSfLUBIhRhYIGkPMDHHGCJloNOIPL9EYkKB4SURiovBnRn+QQaZchUgQp8KcDlh2MawwV7YJG1u3sVtvWy9fPef9sMt0Gp1JQ/KdNzl9z7Xt85znfd9+VdlLKx0APmVtFWt6KMPCrJ1h7WmNJfeeg6xTxpoGyjGO1clasZq9rIRy7X61gmQ/oxLUULgJAgQBggBBgCBAECAIEAQIAgQBCjXtbA8+UlaKPTufmXrADkdx+UoPtu3aj6aLnbN7MtGnILPABZVKJU/E44hFwgj0X0doePBvz/H98jk1Btuak6OAVffeSZ6D/qymFgM3RuEqWIAPt22ieb1eiwX2bOQ7c5GZkUZzOp0W9pws9gg29bGGFD3NmU2p0JnTCIwUiyI46EUkGCBSLI6FUOt0HCnzemhTjeQTt2g00T4pFkmeAkpci8nvrvoKJ79vgrvjGnZt3Uhglxffjpq9r0wDeqK2EQ1N7dj56hP48kQ9Xnr7cwJde2AHbptnxZY3q/Cd20t7J4ZvwNf7G4HKWnqXrA4GODO/CGrt1FeOToQw4rkEndFM40jAnxwCrHPMWOSYR32fP4TSu5fgqcceoHF942Xyr7+3D13XvKQCTszDD5bg0Nc/0VpRQR75Fzc9ROCb2zpx7JvzsOYX0rwUjdAtm7Jz5DELAykaRWCgD9FQkFRimb8QWkMq22eCzvQHAYHkELCsaHGif+CTlxP9C60d2PpBNZHjuiMP5evuQ67NSmtXewdxydNDfafDBmeeDZsfL2NhHqe8AaYWDoibOcdOjVssHMZYt4cnBKg1Ghjn2pgy9AklxCZDUwoIJkkBJS4neX7DR0+dw/CoHy3uLrS0dWH9muX4+K3NtFZ95CyRUbF+JS784kFv/zD8wQmYjQbsfedZaLUa1Bz/Ea3ubugt6XLekyQW//0snmNM4kFEfONQ8+TI5M9zQHDIi7BvDGm5DlIGJ5ATEqf9oWQRICugav9p7Dv8w7S18nUryH9xvB5HTjXgo+2VNG5s9ZBvv9LLFOTE0iXz4Q+E8P6eQ3LSNMqJcnJsBP6+nmnvaUjPgIrd/uT4KILePhizbXLlYTH/f25/1lXAdTOGf2ZJ7c92sf0q+deefxSnq3eguHARjRua5b2/dl5P7OUJdGjEJ1cIlsllUL6/vGeEKYFbimUO5hYWw2DNkuf94/947t+Yyl5aGf+vh3KyMyBJcXiHRmesySuW5VN5O9fSgYx0E1WD7p4BWn/jhXI89+RaeLr7UFaxHdGYJN8Ei2mVWsNifnJmqbKkqEkxIMpuPR6XqAxyyfO8wPsx1ufhkBQCZmtp5lTUHXyXSmXFlt2oO+9W1k/hyg2rCfzhkw23BPikK0A8DAkCBAGCAEGAIEAQIAgQBNxiBIQVjD/GCTirYALqOAH8H4tvFaaEyE3MG38XYABCjHjqM0/uowAAAABJRU5ErkJggg==");
    }
    .form-control.creditcard.visa {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2N0ZCMEUyQjA5N0ExMUUzQThCQUUwNkRBQTdGOUQzMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2N0ZCMEUyQTA5N0ExMUUzQThCQUUwNkRBQTdGOUQzMSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+NGpUrQAABKJJREFUeNrsWHtMW1UY/3ELFAq0tCuDQjtbnm7SjbkBA3lMN4LO6QwxzmWSmKiJfyiJMWaJ/0m2mCzTaJYZXTYN6kKi0z/cDIsyF0eGcxuMOXkMxvv9KOXVVvr0nHPpbe8kMUpS/uj9ktN77ndPzznf73zf7/vujSg6WL8JwBnSykmLRniIk7RfSXs1kvycJW0vwkvoQVeQVseRnzKEr5RyYeT2q4mMQ5iLBIAEgASABIAEgASABIAEQNhK5H8ZrI+zotLQiQr9PWjkNqbz+DhcGDTjk/ZS0dgXnsrGk6VG1u8ZnMP7n93AB0fKoFbFMN2Jz1vQcd/C+rqkODxfmYWduclITY4n9SmH2XkHmm6N4uMvb4vmfbN6O7blaMFxEey+5ugVLNldoQFgxKbG2a5i1HUXoiqjE4czbyCWs2Pfpj9xuuMxuH28Q9HNHdr/MJI3KNj9dz/1IFYeiV15qYjg9w2L1cGu5fl6vFdThOgomWit1I3xeChNKdLt2qbDoadzRLockwYt7ZOhDQG3V4bzvWaM53+BUc6MaM4Do9Ii2qjf+LnFZTQ2DzFj/MbbHC5MWuwMlCOv5QvG3+maZid+6lwbLv82hPYei2jdlw5s/sdecrM2hC4EgsXr9WFmwYu8/R9i8Md3ka2awv35JPbswJ4MYdzFK31Ydnpg0gdOc2BkgV03Z2iQqJQL+tpT1zE+bVt1vWyjGo9u2cj6M8R7tOpY1n9kjQCsiQR/vzMOjSoWun3HkJ7kZTq6seLtqTw/eHzM/amY9Crhf30j8+w6v+QUzXeCcETJjrRV16qqyBT61EPo3FS2ZK4rABPsqklUwFRWzfrPPpEOmYz39ebbY5icsbN+ukEV5AE8AL1Dc/jhcq+gpyAdf6cUp2v3wpCSIOgTE+SoXCHUuYVl/HJ9mBCrlV+bkCol0XUBYGrWjr5h3piCnTlI0cbhmccD7v9NQ7fQN6YFAOhfCQEqx8/cwsmv27BoC3hDbrYWn9bugSqBD4/nyOnLo3me+Ll5EC63F3e7Z4TxawmDNdcBNAzYpxVy6jXVeUjWKgQjWzt4dqZkl5KkCAAwOh/gEp8P9Re7UPXGBXx7KQCYWhmD8gI9mzfY/ScIR+Sbk+F0eYOIUBt6EhQA+GOCpTwquwsNgp7Gvo8PU5YBuJUUYHe4WVj4T5QSpD8zfFTXisoSI5Txga90uwsMAuH564AHhZLpugHQ1jnNjPAbRGWJuHPD1f6g2FYGuT9/+ltJMXPsrRJcaxlF94CVnWgZqQn8xrs9Xtwk4NbWFP/rHnJMakRFciw0Qg6A0+Uhrj6FojydoGtoGoDjL7eI3B4EgOriFVGM3PwEF5xiT37VRsg1RohvCsjhtxtYXSGkTVJAFZKag9YRWSRN+ivLkAJApZEQkzoon5+/1CN6LiOVYVffLO8xpNihcq/fikZS7JgJ4SURF6ceMG21M4/6noQPff76i1sxNrXExt+8O4nhiUXRvNdax2DQ8dlCT0ro/wNARNHBep/0NigBIAEgASABIAEgASABIAEgARCeADjD2H4PBeBqGAPQRAF4hb7QhZknuFZsfvlvAQYAHheK9jMfKWkAAAAASUVORK5CYII=");
    }
    .form-control.creditcard.americanexpress {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5RkI5MDAxRjA5N0ExMUUzOUQ4QkU1OTZBNzYxMzREQiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5RkI5MDAxRTA5N0ExMUUzOUQ4QkU1OTZBNzYxMzREQiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+jutENgAAB2FJREFUeNrsWGlQlWUUfi7cy2VfZFdAFkUQUVxAwz3TLM3d1DQEpRzN1GaymHEdl6yxcVyyUcfQynBJUxx1zNBEMERRSBkUEdkR2ZEdLtzOebn3E4p+hEN/7j0zL5fvvd/33vc855znPO8n6xMR4wbgMI2xNIygG9ZEI5ZGuJz+fEfjDeiWcaAn0vjegP6Mge7aaAMdSvvOzNAAOm56APQA6AHQA6AHQJdNrv2np7Uxrn4aDLmhTFw3NLfi0v3nmDXUWbq5plGFcV/dRC8bE0R/HNSlH6xvbkHG81r0cTCDqZGhmKusa8bVh6UY420Le4vOZclPt/KxcISLdN3Sqsa+q1lYM9FTmvv610wcvJ7dNQDeD3bF9fRSRJxOE9e7F/jj7YGOuJxajPW/PBRz+xYOxOKRbnCxMcbppEJ8eSlDzB8ODRD38Vx72zbLFym5VR3mFSQ9RnjZYNtMX4QfTZGeZ9iXRCbjWVWDmLsRMQqTd91CXZMKkwc4Yv073lIA2EJpH8vHu+NJcS3mH0gSv9XlDLA0lmNeYE8sOZICbydzFL9oxAFC8tgHQ9CsakVVvYoio8Q3hPiBkIEwkhtgyu5bMFPKUVjZABVFo54yRk7O7ZrnJy3e19EcCZkV0jzfdyW1BCfvFJBTDqhtbBH33c97gYgzaZjY3x7LxrmTPJPh5O0CFFc3YlqAE87cK8SK191hQfvkvfQwM8K3v2fjTVqjVa0Wc7zPLnPAu+Q8I8nRWkRpFkLZkPi0AmmF1dKNoSNdcTurAulFNYh7XIacsnosHe3WYbE6cugEbVw72AE2djy3vB75NEpqGkXq+/WykJ6Lf1IO8gNbZ/qguaUVk/zscfRmnnBw7WQvyg4ZfvwjT7o/fIwbbM0VWEeZyc+9EglySoaQc4dicyCjPIzLKEcKRYSN57T2lr8D3GxNRN3x5kZTvfbvafE3YS2Daw8TaZgoDCRgOKKn7hQi4UmFeM7OXCk9p9Z4wZniZW8muIczq6K2CXtjsmBtKhfPvmhQifvMCMAtM3yQTAE7lpD/aiQ4dZAjmlRqXCMSCu7TA3JyQk4/MMzdWtS1r7O55Fz46N7YeO6RuOby+LspyeGRtIbWLIwV4pOJ7ezKIJTVNCG1oFrU/t3sSum+IA8b8bmJ1p7k54CDBHxvAru3ramY5zXPJRcJELQ23scOU4ijTiUVvBoAYaNccSIxH3a0yb3v+YuNGVEkPOxNMX3fbUSnFMHKRA4DSg/uCJHxuXC2UmK4p40oGf6OQeNoqyh9V0U96ECCPM+1y7b9YgbCKNv4GY65mbKtCwR6WGPz9H6ibOIzHomM2Ditn+gUXGrj+tniOfESZwY/yxxUQBmygYiRs6CWyFEh71pHl6nVL6uIa56d5mhfWxssWmN7K6GaZjJkq6htho2Z4j/92OrjqdizYMA/5quoDcYSr7xG3cHW3EiAzbuatCsB2aV1wlHmpfYWRW3R0coYE3ztXqkNyvpExKihw6ZXgt21cMaOCf/6HbfSBQfvYgoR8JbpPqL7tLdG6umc+nZUDlwS7a2aOgF/5+9i2enadU0tyKN2y91Eq2rZ8ivqRftlDfG/AMA2dU8iijTK7mXRybCZCO7MikDYEvHOIxXHLa+huaWDWhxAOmE7kega4o34jDLpOxZfM4c4C5LWqkKtBbhZYedcP+y8/KStlWvobeUET0Go2y48RqlGm7BdWD2iewHgaLFemDuspzTH7eyzn9NIavvh89O5guU3TfMWBPnJJC8EuFqKdrmW7jlCHaeWIupoaYx1U/uSSFLjBxJE+69lkUJ0FAqQyVFLhNxtTpHKjE0vwxezfWGubHOvn5OZWN+QwN8686VktiJ9Ie/uGksrrBHtjc2PBNAO2hgD89GxB6KlHftwKLSJygLH0kQhNL8QSFJJtAglqSIA+ODkYWcqpTK37RJNVHl97gwiun8+F+XDgiyI2qwDda97OVW4SK2UgRpM2WIsN+x+ACzJSd5EmyBSCu3OeqFNXBlAQS2XpTLbriuZlP4kfClS3BLDRrlh/dlH5GCTUJL8WEZxDeYH9RKtmo1bcfv1Zwx2Ih0jQxIBwxkSGZcjOGE3tV8ORC5lXBZxCB/QmGO6HQA+ObZXh1zTiU8rcWjxIJHKoXQC3Eqylo01wjhSeHzUZaKTa5xk6czKs4Yy5xRtnGt8OR2a2DyJ7LTrc2SZTxjAQFKXvE5CZjkp3VZBvC50jOfhaKkUZx0+d3QrALwhPjjxkPouObV/kT+lqhIHQwYhLDIFm8+ntylKIr9N0elC5LAdXzZUlAVrNVaCUYkFcCeJzKdXThp+Jjr5mRhaEpxDfLPh7EMpwzyJLFfQsZnPNVoyNVYYYjap2pF9e3QvABdWD+90nk+Vc/YniUPY+VUdX6z8llbS4Xq3RjlyZNnYwTkaUk3aOLbT9fmorX1pUlTVSGRoKK2jfbHDL2VWRaXqlaD+pageAD0AegD0AOgB0HEAmnTY/xYG4IYOAxDHACylEaNjmdCs8Tn0LwEGANFzD+vUOoKUAAAAAElFTkSuQmCC");
    }
    .form-control.creditcard.dinersclub {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3QzZFN0NDMjA5N0ExMUUzQTlFREIzQkJBNTFDMUVBOSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3QzZFN0NDMTA5N0ExMUUzQTlFREIzQkJBNTFDMUVBOSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+DhLVaQAABA5JREFUeNrsmHlIFFEcx7+r5qqb95GWeaRWpBamhhZ2UFKupZ2S1h9Z0QkdEFF0KR0UEf1RWFAWREFaJF1GEZgWphGdVt6laZalrpjttofbe2s7u9OYGbQxy8wP3rIz83tv9/eZ3/WeBPITAQBOkzGFDHsIQ9RkFJOx0hZhsy+TL4lk2EI4Qm0NISPKhnxMhnAlwUZAbt+nJ9hA4CICEAGIAEQAgha7//EjwzxlWDZjFBKj/DHE3Ql6vR5eLg7wdnVkdLpVWjS3daOioR1Xy94i/34dVGqdxf+bhLTCekstLh1ki+ylMVg4KQQ5NysMRjV96Waeuw+WQh4bgI0pkYgd6cOa+6G9G1vPlOFCUY11AnCV2aMwW4437xXYcPIBvn3X/j4OJRJsTI3E4RXxpDORsJ7l3qnE6mPF0PVY5j3RvUDWP48r0l/d2JOE4pct2HyqFBpdT7/61LSyyk94Vt+GtIQQAxCjjA/xgp+HDNcfNVgPgC0LxpEYd8S6nBIWlPBAd7QqlMy9Eb4uBjhqbS+gqmYFVBqdIVeYS3SoN2pbOvHyXTv/qwB1/fWzI7DmeAlJdr33PJ0dcO9gCrYtimLpzowejoqcNIwN9mTuHbnyHK8bOzjrHl4eD0d7O/4DyJgahmtl7/C5U8nEd8GumZg0xrdP/UAfZ9zemwwft96KQGP9QP4Tjp6fhxMWJYzgPwB5TAAuPahjrhdPCUVCuF+/c3xJady5OJq5vkoAarTcvDFnQhD/AVB3flr3hbleQjxiYJ4TCmPu+6rUoJrkg18lJsyb/wAGOwxCFzHAKKOHuw1oHs0TPmaN0ccOZZ9hwHsAKg273uv/onybq37X6PrsF3gPgLa0TlJTtn7VOLDSRcujeYn095JxdFo6vvEfQCXp/CZHmJLeQFvZC/dMeh7OUtIzeHB0yqs+8R/ADdKxzZsYzFzTilD0ornfObUfOrH/oqn0pcYFc1piKgWlb/kP4HxRNaaP8zeUNmMOmL/vDu4+a/qt8Ul7CtHWpWI6xu1pUVzPalIQmPXWsRlaNWsMUuICMSf7FpMEaQILG+aKqiYFqwmica9UmxLn7vRosoOM5STS5KxC3HrcaB0HIqduvya1XItDmXHMvR5ihbnxVBpau1jGzyehszsjhrPejnPlFjHeYgDoG8s8WoTgIS44u3ka3GTSfvXt7XrdPm9bIiv26Tr7857g4KWn1nkgQt1+09xIrJWHk9xQgyul9awdHS11NOFtSo1E6FBX1ly6IdqS+9Bib/6/ADAKPf5KJ3uClLggwxaYgqGbH/N+gR6YNH7+isc1rYZsf628Ado/nCNYDQA+i3gsLgIQAYgARABCB6AWsP06CqBEwADuUwAryLgrME/Q/LR52Q8BBgBm3GJpfFCpogAAAABJRU5ErkJggg==");
    }
    .form-control.creditcard.discover {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MTYxNkM1QzA5N0ExMUUzODkyODk5REFFMENGQ0I0MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MTYxNkM1QjA5N0ExMUUzODkyODk5REFFMENGQ0I0MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Nbpv+wAABOVJREFUeNrsmnlQVVUcx79gGWtvGCuteBgOSykiISQaO5GgwWtKZlJkMfpDrZQmBNOCxqJF0UlsEaPYbAMCCp1JnjFsZSKyiRA8FkGCARyBx9Lb7judexzuSKMNIU7Lu7+Z39x7f++sn/P7/c59d44RIcQGQDpVH6rzYRiioVpO9QUjCkBOb56AYUoZD0BtQCv/Z+F4AAQGLCIAEYAIQAQgAhABiABEACIAEYAIQARgkGI804J2Do5MXVxXYld8PIaHR5h92/YXESp7GjzH+IQEPGgthZPzCuTm5l378qDRMPt9ixbB1NwCXt4+1xrUc9CUpGEiKQDju9zw+0cx0Pe3o7a2jvWTn/+t0HdjYyOz5eXlC+Pg1dXNHS0tLcKzx5o1+Dwj4/YA6OnpgYO9PRwc7PHxJ0fhFxCAsbExDA4Noa+/HyVyOT44nIqQkBAE+Pujo7OT1QuPiEDqkQ8hC5Vhz2u7MXTlCrOrvk6CunA/9IOXQMaHoWsqw+T+Z7HiAQmMjY1xNC1N6Ds7JwcDAwMIDAxk41hsY0PbC8W64CAKWMtsPt7ekNwtwdZt2xnEGQuZodx5lwnJys5m9z+fOUPmm5iSd997nzyzIYysdH+MpB07xspQEEKds9XVzEZXRbCNjIwQrl9BlFuX3FAn03eQt95OZvXa29uJVqsl1KsIBSmM43DqEaG9+voGZisrLycdHR3sPuf48ZlOixjPJm5We3jA2Xk5KisrBVtwUBDuWbAA658KwdqgYOa2VVU/wdLSElGRkUI5iUQCTnHu5p9o6G9RkREwMjJCRmYm5KdPMy+LjooSyiS/k8xc3tfPX7CVlJTgzX37mPe4u7nNeC53zDp50I54nRKpVIoLFxqRnZ2DlJQUBK9bj9jY2L/fMNGztvz9/JCVlY02hQLW1tbseUqcljnBxcUFVlZWgo0PMz7f5Od+A0dHx7nPAddLTc15UNeDr6+vYBsdHYWS6iuxO7F37x4W60sfeZjlCRo6QjmlUol5S1xv2vY8O3d25Vd8YHAQRUXfMY+4HrZMJsPBlAN4nfYzJUmJiexa39Bwe7ZBGvMswVlYmKOwsIhSdkBZaSkio7egu7ubrsoy0DhEzPNbkEuzNQ+js6Mdz23ahOLiE4jYvBk2NlJ88eVX+LX5IlSZcdCeLZw+mPmmMNtdBOP77aBSqSBd/BAD29rSDFtbW2EcXp6ezANMTU0QtiEM7qtWQV5yCgUFhfg0PR1VFRVwdX10bpMgn+h4fdzTi7yRmEjoSjL7q3FxZGN4OOnt7SV0OyRmFpZkqdNylpR4UavVhG6b5N6FC4mJmTmrz4TTEdX3h8hYwmqifMmRTBzcSHTdTdP6fHnHThL45NobjoNXmgNIa2sru6deSSgsZouMjp5xEhTfBEUAIgARgAjAECeuv9wMddEBwwOgH+qBpvgQtDUn2VunwQDgOmuh+TEDuvpT7K+4YYSATgNdgxya0kwGwGByAHepAbqaE9D+UgAyMWIYSZDraYKu7gfozp9kcf6/3wWIehKcohpccwVzc/3Vvllvg/+JIzL8hPVdddC1nwPXRifeRWNap71lx/l3HpLidND3K8Bdvsjimeuqh/631mnZe46EHZLij8l9RtX7n/AEMn4V+j46WTpBfW8zU66vbS5W96+Eb5w/JhfzhwADAEp6pBLh7YWZAAAAAElFTkSuQmCC");
    }
    .form-control.creditcard.jcb {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3ODJEODgyMDA5N0ExMUUzQUZBM0UzQ0IwMzlDQTM2RCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3ODJEODgxRjA5N0ExMUUzQUZBM0UzQ0IwMzlDQTM2RCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+RS3J7gAAA3pJREFUeNrsWHtIU1EY/22z+Zo1Tc10zVctXSWZFib2olIxE6KgoqclERRoUPT4wzAii6AIgrCkt2UU/lVYUfaCHqL5gLKmtsxX6dxSm489XOcec2gzZ7Bi894ffLtn537n277fPef3nXN5WJwjBZBLbBExIdgBHbFnxNIECFp5hzSWExOAPWByDSUWyScfC8FeLOCzaNoPOxP4YDk4AjgCOAI4AlgNJ1sGm+IrwpndsUiYJ4Gbs2Vo3pLz9Jq2Igz718/G1IDxFj4HLxTj+I1ySHzccXrXfCTFSEeMZTcEuLs4oehU8rBJDcbOFDnO7Ykb0ceVJPyYxJJJJjjOElizKMRq8gz2rYuw6rMqLui/JG9TAiZPdBuVX5Cfh1Uf6STR2BVBPo/HVYExWwV+R01jB9q1OtoerA+azl6UfGxFU1sXdPo++IhdEOI/HuFSMb3/Vd2FUoXKIh4TY4K70HEIyDj7Evdef6Htu9mJ9Jp64inyHtVAb+ijQjcj2BPNhIjymjZkrJlFfS7fV1CTB3qSiiBAQ6sW3zTdcBEKcOvwMqTEBjoGAcOBSYxB5uY5yEqNNvf/6NajvkWLqw8V5r78zKWYFeKFd581mJl6Gz06Iwrf1Ds2AfRHySn80MbIIX0i13EIDxQP6Tty9S28PJzxvk5Dv88N80H66pmOKYIC/t+rv5wQEjXdG8uiAmj1qKxV4+bjGvskQFHfbha8gSld+Undv20luU8btLExGPuQnVc+ZDzjX1X33WJztSM5HAc3REIsEqJXb8TRa2V0vN0tgYIXStx9VYc5Mm/4ebmhuKqFqrzzOAGObItGqH9/FdiSIMMN8hSzrpQiv6gW8iAxUf1ulFWrzCI4gKQDhRA6CSg5alI56PhEGV1CtgIPi3NMtgi0d20ENsXLoGzuQFtHL0wmE/wnuiNG7gtPso4HDjCmJztoMrQMqkgZNBjhK3Y1l8HMSyW0DO5eZbnWGT0Inuxhn4ch5qlEEMVmzBqYROKjJX+8z8ygKDKTuJ3gWCLA2GdiNwHK5s5R+TWqtDaLZVcEnMyvsOpT3dCOgudK67FuVdjsf/3znWBtUweOXS/DxcKPf/Tp6jXgQXED0snZQdtjGDEW87os994H+yuDnAhyBHAEcARwBHAEOCYBOhbnb2QIeM5iAl4wBGwn9ohlM0H/K+etPwUYAO7UFu8nZtFbAAAAAElFTkSuQmCC");
    }
    .form-control.creditcard.mastercard {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2REIxOTA4NTA5N0ExMUUzQTM0MEZENTU0MTExMTk3MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2REIxOTA4NDA5N0ExMUUzQTM0MEZENTU0MTExMTk3MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+XxeyrgAABOJJREFUeNrsWmtsU3UU/93e2wdryzo21r2f7GX2YGOsC+KmM5MoRMyWICrgC2MkYCSRT8ZADJqIUePzg4iPRGMEBaODoV8UFhgje7ixh869YOs65rq1g7brvb33eno18YsZdq3pTHuS0/b/zz23//O7590yTOXzGQA+JK4l1iAyiCc+R7ybZVI2fEUf6olZRA75dc0lLlfRSw0il+5QRZDZ/6MlqBDhFAUgCkAUgCgAEU3cf3HTlaKAxrmrqJ+fRLHHgViRV/Zt6hX4OWYVTsemoZnYxzB/PwlGxubkMeKrqE6YQqLWDY1KgkPQoscRj7NTmfjyWh6cQmizNkOlsByymxHvsg/hwFQfjATCYjSmMeDF1HKcN5pRlziBwyWXkG90LCozT8q/MlCJYyO3QV5uAKhlCe9ca8O9TmtAcheK43FPw3BAMt9NZuPp9rvAS8F7sL8XOBSKJ//2eBs2B6i8nzKmPbBDB2PWwr+WKSBLyTU4FSCWRRB8xD6CLY6JJcsbzjEQrIGFowdSR/Bo9kD4AdBLPvL53iAPIePG94aA5V4oaoeeE8ILQANFe9NfUT4Y0pIBeSYDi/BxGi+2pQ+FFwB/qlMlxEG7cf2fQSU1CRpL+dJy8jAdh1FBnVULTf59YDjt4gEsoQBb0m3hrQP8eV6/6yGY3jgIq7kMCV+8D8nlxuxj+8EV5MA3Og7JPgetpQKS2w1dfQ1E23V4TjRBXVwI39gExKlpqEsKIfM2GBpfgsqQBFlww2cfBKs3Q5qfgOz6HaqVqZAXHJAp47CxGTDubELJkbLwAhDv80K9rhSyZwHG/U9BU1mK+TePImZHA7icTOi3b8XCTxfBmlfD9dnXyprvGYDh8e3gO3oQ8+D9mK7bBnPLKXiaz4BLrYLj3VJA9EJn2QM2LhfatTtws2kv9JuOwHPhddrfS6D1EDBWrMJM+LOApqIY/OUuGJ99EsKvw/D9MkQuUQV14RqIM3YIpLC6KI++TQU2KRHzr74HLi9bcRe+u48ALIHn2x/gvdgCaXZIUZ6hQonL2Ah2dQEkeuqcma5pfUs5sjB4Bnz/SQKhO/xZYC7WBC4rnQ7fAfeps2DTUsg5WWjIpEWrDUJ3vzJ3EfoHoa2uIDPnoSktAtmxsse3diprvvMKuUMfWcA6GLZ+AF31PnDJ5RCd5CK2brDJa5V3hlXTNeuhq3oGPlrbvbrwukC/zgTzpochTlAwoprS9clxUqod0pyT9ibJZ73g8nPBX+okV2iFtqYavqFRTNc2Kn7vbesi3zZAnJ6BNecGNB/VgY3PhzDWAvH6FcXMZe88mBVxtO6Fz3oZov03SM5xAmcc3c6E8JbCO+3DOGztCk1dvtuNmJTAUuqB7tvx8WhR+FzgZFwmHGzwHZojmQtY+Tlei+Pja8IbA1wqDq8lFQd1D5maCXX9QsByL1Nn6PKpw58FPo/PQZMpbemHuNuLxKybAcl8Y83Bp0GYfkgB8AeR59Kr0BybGrDsidwMxGzwBNwO7+m4MyQzgZC0w36SGAanTemY5TSodNuhpWrtVgORfRkWHDUUoH02EWWmGcRrF245EDnYZ8GhXgtEmVl+E6GIH4n9Hyk6Fo8CEAUgCkAUgEgHgI9g/UU/AOcjGIAWfyns/7tYCbG/m4mUf4r5f0z4kfiJPwQYAB3H59j066DAAAAAAElFTkSuQmCC");
    }

    .form-group {
    margin-bottom: 25px;
    }
    .form-group .control-label,
    .form-group > label {
    font-weight: 600;
    color: #34395e;
    font-size: 12px;
    letter-spacing: 0.5px;
    }
    .form-group.floating-addon {
    position: relative;
    }
    .form-group.floating-addon .input-group-prepend {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    z-index: 5;
    }
    .form-group.floating-addon:not(.floating-addon-not-append) .input-group-append {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 5;
    left: initial;
    right: 0;
    }
    .form-group.floating-addon .input-group-prepend .input-group-text, .form-group.floating-addon .input-group-append .input-group-text {
    border-color: transparent;
    background-color: transparent;
    font-size: 20px;
    }
    .form-group.floating-addon .form-control {
    border-radius: 3px;
    padding-left: 40px;
    }
    .form-group.floating-addon .form-control + .form-control {
    border-radius: 0 3px 3px 0;
    padding-left: 15px;
    }

    .input-group-append [class*=btn-outline-] {
    background-color: #fdfdff;
    }

    .form-text {
    font-size: 12px;
    line-height: 22px;
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::before,
    .custom-control-input:checked ~ .custom-control-label::before {
    background-color: #6777ef !important;
    }

    .custom-file-label {
    line-height: 2.2;
    }
    .custom-file-label:after {
    height: calc(2.25rem + 4px);
    line-height: 2.2;
    border-color: transparent;
    }
    .custom-file-label:focus, .custom-file-label:active {
    box-shadow: none;
    outline: none;
    }

    .custom-file-input:focus + .custom-file-label {
    box-shadow: none;
    border-color: #6777ef;
    }
    .custom-file-input:focus + .custom-file-label:after {
    border-color: transparent;
    }

    .selectgroup {
    display: inline-flex;
    }

    .selectgroup-item {
    flex-grow: 1;
    position: relative;
    }
    .selectgroup-item + .selectgroup-item {
    margin-left: -1px;
    }
    .selectgroup-item:not(:first-child) .selectgroup-button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    }
    .selectgroup-item:not(:last-child) .selectgroup-button {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    }

    .selectgroup-input {
    opacity: 0;
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    }

    .selectgroup-button {
    background-color: #fdfdff;
    border-color: #e4e6fc;
    border-width: 1px;
    border-style: solid;
    display: block;
    text-align: center;
    padding: 0 1rem;
    height: 35px;
    position: relative;
    cursor: pointer;
    border-radius: 3px;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    font-size: 13px;
    min-width: 2.375rem;
    line-height: 36px;
    }

    .selectgroup-button-icon {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
    }
    .selectgroup-button-icon i {
    font-size: 14px;
    }

    .selectgroup-input:checked + .selectgroup-button {
    background-color: #6777ef;
    color: #fff;
    z-index: 1;
    }

    .selectgroup-pills {
    display: block;
    flex-wrap: wrap;
    align-items: flex-start;
    }
    .selectgroup-pills .selectgroup-item {
    margin-right: 0.5rem;
    flex-grow: 0;
    }
    .selectgroup-pills .selectgroup-button {
    border-radius: 50px !important;
    }

    .custom-switch {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    cursor: default;
    display: inline-flex;
    align-items: center;
    margin: 0;
    }

    .custom-switch-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
    }

    .custom-switches-stacked {
    display: flex;
    flex-direction: column;
    }
    .custom-switches-stacked .custom-switch {
    margin-bottom: 0.5rem;
    }

    .custom-switch-indicator {
    display: inline-block;
    height: 1.25rem;
    width: 2.25rem;
    background: #e9ecef;
    border-radius: 50px;
    position: relative;
    vertical-align: bottom;
    border: 1px solid rgba(0, 40, 100, 0.12);
    transition: 0.3s border-color, 0.3s background-color;
    }
    .custom-switch-indicator:before {
    content: "";
    position: absolute;
    height: calc(1.25rem - 4px);
    width: calc(1.25rem - 4px);
    top: 1px;
    left: 1px;
    background: #fff;
    border-radius: 50%;
    transition: 0.3s left;
    }

    .custom-switch-input:checked ~ .custom-switch-indicator {
    background: #6777ef;
    }
    .custom-switch-input:checked ~ .custom-switch-indicator:before {
    left: calc(1rem + 1px);
    }
    .custom-switch-input:focus ~ .custom-switch-indicator {
    border-color: #6777ef;
    }

    .custom-switch-description {
    margin-left: 0.5rem;
    color: #6e7687;
    transition: 0.3s color;
    }

    .custom-switch-input:checked ~ .custom-switch-description {
    color: #495057;
    }

    .imagecheck {
    margin: 0;
    position: relative;
    cursor: pointer;
    }

    .imagecheck-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
    }

    .imagecheck-figure {
    background-color: #fdfdff;
    border-color: #e4e6fc;
    border-width: 1px;
    border-style: solid;
    border-radius: 3px;
    margin: 0;
    position: relative;
    }

    .imagecheck-input:focus ~ .imagecheck-figure {
    border-color: #6777ef;
    }
    .imagecheck-input:checked ~ .imagecheck-figure {
    border-color: rgba(0, 40, 100, 0.24);
    }

    .imagecheck-figure:before {
    content: "";
    position: absolute;
    top: 0.25rem;
    left: 0.25rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background: #6777ef url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") no-repeat center center/50% 50%;
    color: #fff;
    z-index: 1;
    border-radius: 3px;
    opacity: 0;
    transition: 0.3s opacity;
    }

    .imagecheck-input:checked ~ .imagecheck-figure:before {
    opacity: 1;
    }

    .imagecheck-image {
    max-width: 100%;
    opacity: 0.64;
    transition: 0.3s opacity;
    }
    .imagecheck-image:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    }
    .imagecheck-image:last-child {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
    }

    .imagecheck:hover .imagecheck-image {
    opacity: 1;
    }

    .imagecheck-input:focus ~ .imagecheck-figure .imagecheck-image, .imagecheck-input:checked ~ .imagecheck-figure .imagecheck-image {
    opacity: 1;
    }

    .imagecheck-caption {
    text-align: center;
    padding: 0.25rem 0.25rem;
    color: #9aa0ac;
    font-size: 0.875rem;
    transition: 0.3s color;
    }

    .imagecheck:hover .imagecheck-caption {
    color: #495057;
    }

    .imagecheck-input:focus ~ .imagecheck-figure .imagecheck-caption, .imagecheck-input:checked ~ .imagecheck-figure .imagecheck-caption {
    color: #495057;
    }

    .colorinput {
    margin: 0;
    position: relative;
    cursor: pointer;
    }

    .colorinput-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
    }

    .colorinput-color {
    background-color: #fdfdff;
    border-color: #e4e6fc;
    border-width: 1px;
    border-style: solid;
    display: inline-block;
    width: 1.75rem;
    height: 1.75rem;
    border-radius: 3px;
    color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }
    .colorinput-color:before {
    content: "";
    opacity: 0;
    position: absolute;
    top: 0.25rem;
    left: 0.25rem;
    height: 1.25rem;
    width: 1.25rem;
    transition: 0.3s opacity;
    background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") no-repeat center center/50% 50%;
    }

    .colorinput-input:checked ~ .colorinput-color:before {
    opacity: 1;
    }

    /* 3.3 List */
    .list-unstyled-border li {
    border-bottom: 1px solid #f9f9f9;
    padding-bottom: 15px;
    margin-bottom: 15px;
    }
    .list-unstyled-border li .custom-checkbox {
    margin-right: 15px;
    }
    .list-unstyled-border li:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
    }

    .list-unstyled-noborder li:last-child {
    border-bottom: none;
    }

    .list-group-item.active {
    background-color: #6777ef;
    }
    .list-group-item.disabled {
    color: #c9d7e0;
    }

    .list-group-item-primary {
    background-color: #FFC857;
    color: #fff;
    }

    .list-group-item-secondary {
    background-color: #cdd3d8;
    color: #fff;
    }

    .list-group-item-success {
    background-color: #47c363;
    color: #fff;
    }

    .list-group-item-danger {
    background-color: #fc544b;
    color: #fff;
    }

    .list-group-item-warning {
    background-color: #ffa426;
    color: #fff;
    }

    .list-group-item-info {
    background-color: #3abaf4;
    color: #fff;
    }

    .list-group-item-light {
    background-color: #e3eaef;
    color: #191d21;
    }

    .list-group-item-dark {
    background-color: #191d21;
    color: #fff;
    }

    /* 3.4 Alert */
    .alert {
    color: #fff;
    border: none;
    padding: 15px 20px;
    }
    .alert .alert-title {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px;
    }
    .alert code {
    background-color: #fff;
    border-radius: 3px;
    padding: 1px 4px;
    }
    .alert p {
    margin-bottom: 0;
    }
    .alert.alert-has-icon {
    display: flex;
    }
    .alert.alert-has-icon .alert-icon {
    margin-top: 4px;
    width: 30px;
    }
    .alert.alert-has-icon .alert-icon .ion, .alert.alert-has-icon .alert-icon .fas, .alert.alert-has-icon .alert-icon .far, .alert.alert-has-icon .alert-icon .fab, .alert.alert-has-icon .alert-icon .fal {
    font-size: 20px;
    }
    .alert.alert-has-icon .alert-body {
    flex: 1;
    }
    .alert:not(.alert-light) a {
    color: #fff;
    }
    .alert.alert-primary {
    background-color: #FFC857;
    }
    .alert.alert-secondary {
    background-color: #cdd3d8;
    }
    .alert.alert-success {
    background-color: #47c363;
    }
    .alert.alert-info {
    background-color: #3abaf4;
    }
    .alert.alert-warning {
    background-color: #ffa426;
    }
    .alert.alert-danger {
    background-color: #fc544b;
    }
    .alert.alert-light {
    background-color: #e3eaef;
    color: #191d21;
    }
    .alert.alert-dark {
    background-color: #191d21;
    }

    /* 3.5 Card */
    .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    }
    .card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
    border-radius: 10px;
    }
    .card .navbar {
    position: static;
    }
    .card .card-body {
    padding-top: 20px;
    padding-bottom: 20px;
    }
    .card .card-body .section-title {
    margin: 30px 0 10px 0;
    font-size: 16px;
    }
    .card .card-body .section-title:before {
    margin-top: 8px;
    }
    .card .card-body .section-title + .section-lead {
    margin-top: -5px;
    }
    .card .card-body p {
    font-weight: 500;
    }
    .card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    <<<<<<< HEAD
    =======
    -ms-grid-row-align: center;
    >>>>>>> 732ebe8 (chore: cleanup css)
    align-self: center;
    width: 100%;
    min-height: 70px;
    padding: 15px 25px;
    display: flex;
    align-items: center;
    }
    .card .card-header .btn {
    margin-top: 1px;
    padding: 2px 15px;
    }
    .card .card-header .btn:not(.note-btn) {
    border-radius: 30px;
    }
    .card .card-header .btn:hover {
    box-shadow: none;
    }
    .card .card-header .form-control {
    height: 31px;
    font-size: 13px;
    border-radius: 30px;
    }
    .card .card-header .form-control + .input-group-btn .btn {
    margin-top: -1px;
    }
    .card .card-header h4 {
    font-size: 16px;
    line-height: 28px;
    color: #6777ef;
    padding-right: 10px;
    margin-bottom: 0;
    }
    .card .card-header h4 + .card-header-action,
    .card .card-header h4 + .card-header-form {
    margin-left: auto;
    }
    .card .card-header h4 + .card-header-action .btn,
    .card .card-header h4 + .card-header-form .btn {
    font-size: 12px;
    border-radius: 30px !important;
    padding-left: 13px !important;
    padding-right: 13px !important;
    }
    .card .card-header h4 + .card-header-action .btn.active,
    .card .card-header h4 + .card-header-form .btn.active {
    box-shadow: 0 2px 6px #acb5f6;
    background-color: #6777ef;
    color: #fff;
    }
    .card .card-header h4 + .card-header-action .dropdown,
    .card .card-header h4 + .card-header-form .dropdown {
    display: inline;
    }
    .card .card-header h4 + .card-header-action .btn-group .btn,
    .card .card-header h4 + .card-header-form .btn-group .btn {
    border-radius: 0 !important;
    }
    .card .card-header h4 + .card-header-action .btn-group .btn:first-child,
    .card .card-header h4 + .card-header-form .btn-group .btn:first-child {
    border-radius: 30px 0 0 30px !important;
    }
    .card .card-header h4 + .card-header-action .btn-group .btn:last-child,
    .card .card-header h4 + .card-header-form .btn-group .btn:last-child {
    border-radius: 0 30px 30px 0 !important;
    }
    .card .card-header h4 + .card-header-action .input-group .form-control,
    .card .card-header h4 + .card-header-form .input-group .form-control {
    border-radius: 30px 0 0 30px !important;
    }
    .card .card-header h4 + .card-header-action .input-group .form-control + .input-group-btn .btn,
    .card .card-header h4 + .card-header-form .input-group .form-control + .input-group-btn .btn {
    border-radius: 0 30px 30px 0 !important;
    }
    .card .card-header h4 + .card-header-action .input-group .input-group-btn + .form-control,
    .card .card-header h4 + .card-header-form .input-group .input-group-btn + .form-control {
    border-radius: 0 30px 30px 0 !important;
    }
    .card .card-header h4 + .card-header-action .input-group .input-group-btn .btn,
    .card .card-header h4 + .card-header-form .input-group .input-group-btn .btn {
    margin-top: -1px;
    border-radius: 30px 0 0 30px !important;
    }
    .card .card-footer {
    background-color: transparent;
    border: none;
    }
    .card.card-mt {
    margin-top: 30px;
    }
    .card.card-progress:after {
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.5);
    z-index: 99;
    z-index: 99;
    }
    .card.card-progress .card-progress-dismiss {
    position: absolute;
    top: 66%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 999;
    color: #fff !important;
    padding: 5px 13px;
    }
    .card.card-progress.remove-spinner .card-progress-dismiss {
    top: 50%;
    transform: translate(-50%, -50%);
    }
    .card.card-progress:not(.remove-spinner):after {
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJsb2FkZXItMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQogd2lkdGg9IjQwcHgiIGhlaWdodD0iNDBweCIgdmlld0JveD0iMCAwIDUwIDUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MCA1MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0iIzAwMCIgZD0iTTQzLjkzNSwyNS4xNDVjMC0xMC4zMTgtOC4zNjQtMTguNjgzLTE4LjY4My0xOC42ODNjLTEwLjMxOCwwLTE4LjY4Myw4LjM2NS0xOC42ODMsMTguNjgzaDQuMDY4YzAtOC4wNzEsNi41NDMtMTQuNjE1LDE0LjYxNS0xNC42MTVjOC4wNzIsMCwxNC42MTUsNi41NDMsMTQuNjE1LDE0LjYxNUg0My45MzV6Ij4NCjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZVR5cGU9InhtbCINCiAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIg0KICB0eXBlPSJyb3RhdGUiDQogIGZyb209IjAgMjUgMjUiDQogIHRvPSIzNjAgMjUgMjUiDQogIGR1cj0iMC42cyINCiAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz4NCjwvcGF0aD4NCjwvc3ZnPg0K");
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: center;
    }
    .card.card-primary {
    border-top: 2px solid #FFC857;
    }
    .card.card-secondary {
    border-top: 2px solid #cdd3d8;
    }
    .card.card-success {
    border-top: 2px solid #47c363;
    }
    .card.card-danger {
    border-top: 2px solid #fc544b;
    }
    .card.card-warning {
    border-top: 2px solid #ffa426;
    }
    .card.card-info {
    border-top: 2px solid #3abaf4;
    }
    .card.card-dark {
    border-top: 2px solid #191d21;
    }
    .card.card-hero .card-header {
    padding: 40px;
    background-image: linear-gradient(to bottom, #6777ef, #95a0f4);
    color: #fff;
    overflow: hidden;
    height: auto;
    min-height: auto;
    display: block;
    }
    .card.card-hero .card-header h4 {
    font-size: 40px;
    line-height: 1;
    color: #fff;
    }
    .card.card-hero .card-header .card-description {
    margin-top: 5px;
    font-size: 16px;
    }
    .card.card-hero .card-header .card-icon {
    float: right;
    color: #8c98f3;
    margin: -60px;
    }
    .card.card-hero .card-header .card-icon .ion, .card.card-hero .card-header .card-icon .fas, .card.card-hero .card-header .card-icon .far, .card.card-hero .card-header .card-icon .fab, .card.card-hero .card-header .card-icon .fal {
    font-size: 140px;
    }
    .card.card-statistic-1 .card-header, .card.card-statistic-2 .card-header {
    border-color: transparent;
    padding-bottom: 0;
    height: auto;
    min-height: auto;
    display: block;
    }
    .card.card-statistic-1 .card-header h4, .card.card-statistic-2 .card-header h4 {
    line-height: 1.2;
    color: #98a6ad;
    }
    .card.card-statistic-1 .card-body, .card.card-statistic-2 .card-body {
    padding-top: 0;
    }
    .card.card-statistic-1 .card-body, .card.card-statistic-2 .card-body {
    font-size: 26px;
    font-weight: 700;
    color: #34395e;
    padding-bottom: 0;
    }
    .card.card-statistic-1, .card.card-statistic-2 {
    display: inline-block;
    width: 100%;
    }
    .card.card-statistic-1 .card-icon, .card.card-statistic-2 .card-icon {
    width: 80px;
    height: 80px;
    margin: 10px;
    border-radius: 3px;
    line-height: 94px;
    text-align: center;
    float: left;
    margin-right: 15px;
    }
    .card.card-statistic-1 .card-icon .ion, .card.card-statistic-1 .card-icon .fas, .card.card-statistic-1 .card-icon .far, .card.card-statistic-1 .card-icon .fab, .card.card-statistic-1 .card-icon .fal, .card.card-statistic-2 .card-icon .ion, .card.card-statistic-2 .card-icon .fas, .card.card-statistic-2 .card-icon .far, .card.card-statistic-2 .card-icon .fab, .card.card-statistic-2 .card-icon .fal {
    font-size: 22px;
    color: #fff;
    }
    .card.card-statistic-1 .card-icon {
    line-height: 90px;
    }
    .card.card-statistic-2 .card-icon {
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 22px;
    margin: 25px;
    }
    .card.card-statistic-1 .card-header, .card.card-statistic-2 .card-header {
    padding-bottom: 0;
    padding-top: 25px;
    }
    .card.card-statistic-2 .card-body {
    padding-top: 20px;
    }
    .card.card-statistic-2 .card-header + .card-body, .card.card-statistic-2 .card-body + .card-header {
    padding-top: 0;
    }
    .card.card-statistic-1 .card-header h4, .card.card-statistic-2 .card-header h4 {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.5px;
    }
    .card.card-statistic-1 .card-header h4 {
    margin-bottom: 0;
    }
    .card.card-statistic-2 .card-header h4 {
    text-transform: none;
    margin-bottom: 0;
    }
    .card.card-statistic-1 .card-body {
    font-size: 20px;
    }
    .card.card-statistic-2 .card-chart {
    padding-top: 20px;
    margin-left: -9px;
    margin-right: -1px;
    margin-bottom: -15px;
    }
    .card.card-statistic-2 .card-chart canvas {
    height: 90px !important;
    }
    .card .card-stats {
    width: 100%;
    display: inline-block;
    margin-top: 2px;
    margin-bottom: -6px;
    }
    .card .card-stats .card-stats-title {
    padding: 15px 25px;
    background-color: #fff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 10px;
    }
    .card .card-stats .card-stats-items {
    display: flex;
    height: 50px;
    align-items: center;
    }
    .card .card-stats .card-stats-item {
    width: 33.3333333333%;
    text-align: center;
    padding: 5px 20px;
    }
    .card .card-stats .card-stats-item .card-stats-item-label {
    font-size: 12px;
    letter-spacing: 0.5px;
    margin-top: 4px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    }
    .card .card-stats .card-stats-item .card-stats-item-count {
    line-height: 1;
    margin-bottom: 8px;
    font-size: 20px;
    font-weight: 700;
    }
    .card.card-large-icons {
    display: flex;
    flex-direction: row;
    }
    .card.card-large-icons .card-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 150px;
    border-radius: 3px 0 0 3px;
    }
    .card.card-large-icons .card-icon .ion, .card.card-large-icons .card-icon .fas, .card.card-large-icons .card-icon .far, .card.card-large-icons .card-icon .fab, .card.card-large-icons .card-icon .fal {
    font-size: 60px;
    }
    .card.card-large-icons .card-body {
    padding: 25px 30px;
    }
    .card.card-large-icons .card-body h4 {
    font-size: 18px;
    }
    .card.card-large-icons .card-body p {
    opacity: 0.6;
    font-weight: 500;
    }
    .card.card-large-icons .card-body a.card-cta {
    text-decoration: none;
    }
    .card.card-large-icons .card-body a.card-cta i {
    margin-left: 7px;
    }
    .card.bg-primary, .card.bg-danger, .card.bg-success, .card.bg-info, .card.bg-dark, .card.bg-warning {
    color: #fff;
    }
    .card.bg-primary .card-header, .card.bg-danger .card-header, .card.bg-success .card-header, .card.bg-info .card-header, .card.bg-dark .card-header, .card.bg-warning .card-header {
    color: #fff;
    opacity: 0.9;
    }

    @media (max-width: 575.98px) {
    .card.card-large-icons {
        display: inline-block;
    }
    .card.card-large-icons .card-icon {
        width: 100%;
        height: 200px;
    }
    }
    @media (max-width: 767.98px) {
    .card .card-header {
        height: auto;
        flex-wrap: wrap;
    }
    .card .card-header h4 + .card-header-action,
    .card .card-header h4 + .card-header-form {
        flex-grow: 0;
        width: 100%;
        margin-top: 10px;
    }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
    .card .card-stats .card-stats-items {
        height: 49px;
    }
    .card .card-stats .card-stats-items .card-stats-item {
        padding: 5px 7px;
    }
    .card .card-stats .card-stats-items .card-stats-item .card-stats-item-count {
        font-size: 16px;
    }
    .card.card-sm-6 .card-chart canvas {
        height: 85px !important;
    }
    .card.card-hero .card-header {
        padding: 25px;
    }
    }
    /* 3.6 Table */
    .table {
    color: inherit;
    }
    .table td, .table:not(.table-bordered) th {
    border-top: none;
    }
    .table:not(.table-sm):not(.table-md):not(.dataTable) td, .table:not(.table-sm):not(.table-md):not(.dataTable) th {
    padding: 0 25px;
    height: 60px;
    vertical-align: middle;
    }
    .table:not(.table-sm) thead th {
    border-bottom: none;
    background-color: rgba(0, 0, 0, 0.04);
    color: #666;
    padding-top: 15px;
    padding-bottom: 15px;
    }
    .table.table-md th, .table.table-md td {
    padding: 10px 15px;
    }
    .table.table-bordered td, .table.table-bordered th {
    border-color: #f6f6f6;
    }

    .table-links {
    color: #34395e;
    font-size: 12px;
    margin-top: 5px;
    opacity: 0;
    transition: all 0.3s;
    }
    .table-links a {
    color: #666;
    }

    table tr:hover .table-links {
    opacity: 1;
    }

    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.02);
    }

    @media (max-width: 575.98px) {
    .table-responsive table {
        min-width: 800px;
    }
    }
    /* 3.7 Tooltip */
    .tooltip {
    font-size: 12px;
    }

    .tooltip-inner {
    padding: 7px 13px;
    }

    /* 3.8 Modal */
    .modal-header,
    .modal-body,
    .modal-footer {
    padding: 25px;
    }

    .modal-body {
    padding-top: 15px;
    }

    .modal-footer {
    padding-top: 15px;
    padding-bottom: 15px;
    }

    .modal-header {
    border-bottom: none;
    padding-bottom: 5px;
    }
    .modal-header h5 {
    font-size: 18px;
    }

    .modal-footer {
    border-top: none;
    border-radius: 0 0 3px 3px;
    }

    .modal-content {
    max-width: 100%;
    border: none;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
    }

    .modal.show .modal-content {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .modal-progress .modal-content {
    position: relative;
    }
    .modal-progress .modal-content:after {
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.5);
    z-index: 999;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJsb2FkZXItMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQogd2lkdGg9IjQwcHgiIGhlaWdodD0iNDBweCIgdmlld0JveD0iMCAwIDUwIDUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MCA1MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0iIzAwMCIgZD0iTTQzLjkzNSwyNS4xNDVjMC0xMC4zMTgtOC4zNjQtMTguNjgzLTE4LjY4My0xOC42ODNjLTEwLjMxOCwwLTE4LjY4Myw4LjM2NS0xOC42ODMsMTguNjgzaDQuMDY4YzAtOC4wNzEsNi41NDMtMTQuNjE1LDE0LjYxNS0xNC42MTVjOC4wNzIsMCwxNC42MTUsNi41NDMsMTQuNjE1LDE0LjYxNUg0My45MzV6Ij4NCjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZVR5cGU9InhtbCINCiAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIg0KICB0eXBlPSJyb3RhdGUiDQogIGZyb209IjAgMjUgMjUiDQogIHRvPSIzNjAgMjUgMjUiDQogIGR1cj0iMC42cyINCiAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz4NCjwvcGF0aD4NCjwvc3ZnPg0K");
    background-size: 80px;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 3px;
    }

    .modal-part {
    display: none;
    }

    /* 3.9 Nav */
    .nav-tabs .nav-item .nav-link {
    color: #6777ef;
    }
    .nav-tabs .nav-item .nav-link.active {
    color: #000;
    }

    .tab-content > .tab-pane {
    padding: 10px 0;
    line-height: 24px;
    }

    .tab-bordered .tab-pane {
    padding: 15px;
    border: 1px solid #ededed;
    margin-top: -1px;
    }

    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #6777ef;
    }
    .nav-pills .nav-item .nav-link {
    color: #6777ef;
    padding-left: 15px !important;
    padding-right: 15px !important;
    }
    .nav-pills .nav-item .nav-link:hover {
    background-color: #f6f7fe;
    }
    .nav-pills .nav-item .nav-link.active {
    box-shadow: 0 2px 6px #acb5f6;
    color: #fff;
    background-color: #6777ef;
    }
    .nav-pills .nav-item .nav-link .badge {
    padding: 5px 8px;
    margin-left: 5px;
    }

    .nav .nav-item .nav-link .ion, .nav .nav-item .nav-link .fas, .nav .nav-item .nav-link .far, .nav .nav-item .nav-link .fab, .nav .nav-item .nav-link .fal {
    margin-right: 3px;
    font-size: 12px;
    }

    /* 3.10 Pagination */
    .page-item .page-link {
    color: #6777ef;
    border-radius: 3px;
    margin: 0 3px;
    }
    .page-item.active .page-link {
    background-color: #6777ef;
    border-color: #6777ef;
    }
    .page-item.disabled .page-link {
    border-color: transparent;
    background-color: #f9fafe;
    color: #6777ef;
    opacity: 0.6;
    }

    .page-link {
    border-color: transparent;
    background-color: #f9fafe;
    font-weight: 600;
    }
    .page-link:hover {
    background-color: #6777ef;
    color: #fff;
    border-color: transparent;
    }
    .page-link:focus {
    box-shadow: none;
    }

    /* 3.11 Badge */
    .badges .badge {
    margin: 0 8px 10px 0;
    }

    .badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
    }
    .badge.badge-warning {
    color: #fff;
    }
    .badge.badge-primary {
    background-color: #FFC857;
    }
    .badge.badge-secondary {
    background-color: #cdd3d8;
    }
    .badge.badge-success {
    background-color: #47c363;
    }
    .badge.badge-info {
    background-color: #3abaf4;
    }
    .badge.badge-danger {
    background-color: #fc544b;
    }
    .badge.badge-light {
    background-color: #e3eaef;
    color: #191d21;
    }
    .badge.badge-white {
    background-color: #ffffff;
    color: #191d21;
    }
    .badge.badge-dark {
    background-color: #191d21;
    }

    h1 .badge {
    font-size: 24px;
    padding: 16px 21px;
    }

    h2 .badge {
    font-size: 22px;
    padding: 14px 19px;
    }

    h3 .badge {
    font-size: 18px;
    padding: 11px 16px;
    }

    h4 .badge {
    font-size: 16px;
    padding: 8px 13px;
    }

    h5 .badge {
    font-size: 14px;
    padding: 5px 10px;
    }

    h6 .badge {
    font-size: 11px;
    padding: 3px 8px;
    }

    .btn .badge {
    margin-left: 5px;
    padding: 4px 7px;
    }
    .btn .badge.badge-transparent {
    background-color: rgba(255, 255, 255, 0.25);
    color: #fff;
    }

    /* 3.12 Button */
    .buttons .btn {
    margin: 0 8px 10px 0;
    }

    .btn:focus {
    box-shadow: none !important;
    outline: none;
    }
    .btn:active {
    box-shadow: none !important;
    outline: none;
    }
    .btn:active:focus {
    box-shadow: none !important;
    outline: none;
    }

    .btn.btn-icon-split i, .dropdown-item.has-icon i {
    text-align: center;
    width: 15px;
    font-size: 15px;
    float: left;
    margin-right: 10px;
    }

    .btn {
    font-weight: 600;
    font-size: 12px;
    line-height: 24px;
    padding: 0.3rem 0.8rem;
    letter-spacing: 0.5px;
    }
    .btn.btn-icon-split {
    position: relative;
    }
    .btn.btn-icon-split i {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 45px;
    border-radius: 3px 0 0 3px;
    line-height: 32px;
    }
    .btn.btn-icon-split div {
    margin-left: 40px;
    }
    .btn.btn-icon-noflo-splitat {
    display: table;
    text-align: right;
    }
    .btn.btn-icon-noflo-splitat i {
    float: none;
    margin: 0;
    display: table-cell;
    vertical-align: middle;
    width: 30%;
    }
    .btn.btn-icon-noflo-splitat div {
    display: table-cell;
    vertical-align: middle;
    width: 70%;
    text-align: left;
    padding-left: 10px;
    }
    .btn:not(.btn-social):not(.btn-social-icon):active, .btn:not(.btn-social):not(.btn-social-icon):focus, .btn:not(.btn-social):not(.btn-social-icon):hover {
    border-color: transparent !important;
    background-color: white;
    }
    .btn > i {
    margin-left: 0 !important;
    }
    .btn.btn-lg {
    padding: 0.55rem 1.5rem;
    font-size: 12px;
    }
    .btn.btn-lg.btn-icon-split i {
    line-height: 42px;
    }
    .btn.btn-lg.btn-icon-split div {
    margin-left: 25px;
    }
    .btn.btn-sm {
    padding: 0.1rem 0.4rem;
    font-size: 12px;
    }
    .btn.btn-icon .ion, .btn.btn-icon .fas, .btn.btn-icon .far, .btn.btn-icon .fab, .btn.btn-icon .fal {
    margin-left: 0 !important;
    font-size: 12px;
    }
    .btn.btn-icon.icon-left .ion, .btn.btn-icon.icon-left .fas, .btn.btn-icon.icon-left .far, .btn.btn-icon.icon-left .fab, .btn.btn-icon.icon-left .fal {
    margin-right: 3px;
    }
    .btn.btn-icon.icon-right .ion, .btn.btn-icon.icon-right .fas, .btn.btn-icon.icon-right .far, .btn.btn-icon.icon-right .fab, .btn.btn-icon.icon-right .fal {
    margin-left: 3px !important;
    }

    .btn-action {
    color: #fff !important;
    line-height: 25px;
    font-size: 12px;
    min-width: 35px;
    min-height: 35px;
    }

    .btn-secondary, .btn-secondary.disabled {
    box-shadow: 0 2px 6px #e1e5e8;
    background-color: #cdd3d8;
    border-color: #cdd3d8;
    color: #fff;
    }
    .btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active, .btn-secondary.disabled:hover, .btn-secondary.disabled:focus, .btn-secondary.disabled:active {
    background-color: #bfc6cd !important;
    color: #fff !important;
    }

    .btn-outline-secondary:hover, .btn-outline-secondary:focus, .btn-outline-secondary:active, .btn-outline-secondary.disabled:hover, .btn-outline-secondary.disabled:focus, .btn-outline-secondary.disabled:active {
    background-color: #cdd3d8 !important;
    color: #fff !important;
    }

    .btn-success, .btn-success.disabled {
    box-shadow: 0 2px 6px #81d694;
    background-color: #47c363;
    border-color: #47c363;
    color: #fff;
    }
    .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled:active {
    background-color: #3bb557 !important;
    color: #fff !important;
    }

    .btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:active, .btn-outline-success.disabled:hover, .btn-outline-success.disabled:focus, .btn-outline-success.disabled:active {
    background-color: #47c363 !important;
    color: #fff !important;
    }

    .btn-danger, .btn-danger.disabled {
    box-shadow: 0 2px 6px #fd9b96;
    background-color: #fc544b;
    border-color: #fc544b;
    color: #fff;
    }
    .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.disabled:hover, .btn-danger.disabled:focus, .btn-danger.disabled:active {
    background-color: #fb160a !important;
    }

    .btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active, .btn-outline-danger.disabled:hover, .btn-outline-danger.disabled:focus, .btn-outline-danger.disabled:active {
    background-color: #fb160a !important;
    color: #fff !important;
    }

    .btn-dark, .btn-dark.disabled {
    box-shadow: 0 2px 6px #728394;
    background-color: #191d21;
    border-color: #191d21;
    color: #fff;
    }
    .btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.disabled:hover, .btn-dark.disabled:focus, .btn-dark.disabled:active {
    background-color: black !important;
    }

    .btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active, .btn-outline-dark.disabled:hover, .btn-outline-dark.disabled:focus, .btn-outline-dark.disabled:active {
    background-color: black !important;
    color: #fff !important;
    }

    .btn-light, .btn-light.disabled {
    box-shadow: 0 2px 6px #e6ecf1;
    background-color: #e3eaef;
    border-color: #e3eaef;
    color: #191d21;
    }
    .btn-light:hover, .btn-light:focus, .btn-light:active, .btn-light.disabled:hover, .btn-light.disabled:focus, .btn-light.disabled:active {
    background-color: #c3d2dc !important;
    }

    .btn-outline-light, .btn-outline-light.disabled {
    border-color: #e3eaef;
    color: #e3eaef;
    }
    .btn-outline-light:hover, .btn-outline-light:focus, .btn-outline-light:active, .btn-outline-light.disabled:hover, .btn-outline-light.disabled:focus, .btn-outline-light.disabled:active {
    background-color: #e3eaef !important;
    color: #fff !important;
    }

    .btn-warning, .btn-warning.disabled {
    box-shadow: 0 2px 6px #ffc473;
    background-color: #ffa426;
    border-color: #ffa426;
    color: #fff;
    }
    .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.disabled:hover, .btn-warning.disabled:focus, .btn-warning.disabled:active {
    background-color: #ff990d !important;
    color: #fff !important;
    }

    .btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active, .btn-outline-warning.disabled:hover, .btn-outline-warning.disabled:focus, .btn-outline-warning.disabled:active {
    background-color: #ffa426 !important;
    color: #fff !important;
    }

    .btn-info, .btn-info.disabled {
    box-shadow: 0 2px 6px #82d3f8;
    background-color: #3abaf4;
    border-color: #3abaf4;
    color: #fff;
    }
    .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.disabled:hover, .btn-info.disabled:focus, .btn-info.disabled:active {
    background-color: #0da8ee !important;
    }

    .btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active, .btn-outline-info.disabled:hover, .btn-outline-info.disabled:focus, .btn-outline-info.disabled:active {
    background-color: #0da8ee !important;
    color: #fff !important;
    }

    .btn-primary, .btn-primary.disabled {
    box-shadow: 0 2px 6px #acb5f6;
    background-color: #FFC857;
    border-color: #FFC857;
    }
    .btn-primary:focus, .btn-primary.disabled:focus {
    background-color: #FFC857 !important;
    }
    .btn-primary:focus:active, .btn-primary.disabled:focus:active {
    background-color: #FFC857 !important;
    }
    .btn-primary:active, .btn-primary:hover, .btn-primary.disabled:active, .btn-primary.disabled:hover {
    background-color: #FFC857 !important;
    }

    .btn-submit, .btn-submit.disabled {
    box-shadow: 0 2px 6px #acb5f6;
    background-color: #262626;
    border-color: #262626;
    }

    .btn-outline-primary, .btn-outline-primary.disabled {
    border-color: #FFC857;
    color: ##eaf42d;
    }
    .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.disabled:hover, .btn-outline-primary.disabled:focus, .btn-outline-primary.disabled:active {
    background-color: #FFC857 !important;
    color: #fff;
    }

    .btn-outline-white, .btn-outline-white.disabled {
    border-color: #fff;
    color: #fff;
    }
    .btn-outline-white:hover, .btn-outline-white:focus, .btn-outline-white:active, .btn-outline-white.disabled:hover, .btn-outline-white.disabled:focus, .btn-outline-white.disabled:active {
    background-color: #fff;
    color: #6777ef;
    }

    .btn-round {
    border-radius: 30px;
    padding-left: 34px;
    padding-right: 34px;
    }

    .btn-social-icon, .btn-social {
    border: none;
    border-radius: 3px;
    }

    .btn-social-icon {
    color: #fff !important;
    padding-left: 18px;
    padding-right: 18px;
    }
    .btn-social-icon > :first-child {
    font-size: 16px;
    }

    .btn-social {
    padding: 12px 12px 12px 50px;
    color: #fff !important;
    font-weight: 500;
    }
    .btn-social > :first-child {
    width: 55px;
    line-height: 50px;
    border-right: none;
    }

    .btn-reddit {
    color: #000 !important;
    }

    .btn-group .btn.active {
    background-color: #6777ef;
    color: #fff;
    }

    .btn-progress {
    position: relative;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJsb2FkZXItMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQogd2lkdGg9IjQwcHgiIGhlaWdodD0iNDBweCIgdmlld0JveD0iMCAwIDUwIDUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MCA1MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0iI2ZmZiIgZD0iTTQzLjkzNSwyNS4xNDVjMC0xMC4zMTgtOC4zNjQtMTguNjgzLTE4LjY4My0xOC42ODNjLTEwLjMxOCwwLTE4LjY4Myw4LjM2NS0xOC42ODMsMTguNjgzaDQuMDY4YzAtOC4wNzEsNi41NDMtMTQuNjE1LDE0LjYxNS0xNC42MTVjOC4wNzIsMCwxNC42MTUsNi41NDMsMTQuNjE1LDE0LjYxNUg0My45MzV6Ij4NCjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZVR5cGU9InhtbCINCiAgYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIg0KICB0eXBlPSJyb3RhdGUiDQogIGZyb209IjAgMjUgMjUiDQogIHRvPSIzNjAgMjUgMjUiDQogIGR1cj0iMC42cyINCiAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz4NCjwvcGF0aD4NCjwvc3ZnPg0K");
    background-position: center;
    background-repeat: no-repeat;
    background-size: 30px;
    color: transparent !important;
    pointer-events: none;
    }

    /* 3.13 Media */
    .media .media-right {
    float: right;
    color: #6777ef;
    font-weight: 600;
    font-size: 16px;
    }
    .media .media-icon {
    font-size: 20px;
    margin-right: 15px;
    line-height: 1;
    }
    .media .media-title {
    margin-top: 0;
    margin-bottom: 5px;
    font-weight: 600;
    font-size: 15px;
    color: #34395e;
    }
    .media .media-title a {
    font-weight: inherit;
    color: #000;
    }
    .media .media-description {
    line-height: 24px;
    color: #34395e;
    }
    .media .media-links {
    margin-top: 10px;
    }
    .media .media-links a {
    font-size: 12px;
    color: #999;
    }
    .media .media-progressbar {
    flex: 1;
    }
    .media .media-progressbar .progress-text {
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #34395e;
    }
    .media .media-cta {
    margin-left: 40px;
    }
    .media .media-cta .btn {
    padding: 5px 15px;
    border-radius: 30px;
    font-size: 12px;
    }
    .media .media-items {
    display: flex;
    }
    .media .media-items .media-item {
    flex: 1;
    text-align: center;
    padding: 0 15px;
    }
    .media .media-items .media-item .media-label {
    font-weight: 600;
    font-size: 12px;
    color: #34395e;
    letter-spacing: 0.5px;
    }
    .media .media-items .media-item .media-value {
    font-weight: 700;
    font-size: 18px;
    }

    /* 3.14 Breadcrumb */
    .breadcrumb {
    background-color: #f9f9f9;
    }
    .breadcrumb .breadcrumb-item {
    line-height: 1;
    }
    .breadcrumb .breadcrumb-item i {
    margin-right: 5px;
    }

    /* 3.15 Accordion */
    .accordion {
    display: inline-block;
    width: 100%;
    margin-bottom: 10px;
    }
    .accordion .accordion-header, .accordion .accordion-body {
    padding: 10px 15px;
    }
    .accordion .accordion-header {
    background-color: #f9f9f9;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.5s;
    }
    .accordion .accordion-header h4 {
    line-height: 1;
    margin: 0;
    font-size: 14px;
    font-weight: 700;
    }
    .accordion .accordion-header:hover {
    background-color: #f2f2f2;
    }
    .accordion .accordion-header[aria-expanded=true] {
    box-shadow: 0 2px 6px #acb5f6;
    background-color: #6777ef;
    color: #fff;
    }
    .accordion .accordion-body {
    line-height: 24px;
    }

    /* 3.16 Popover */
    .popover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    border-color: transparent;
    }
    .popover .manual-arrow {
    position: absolute;
    bottom: -15px;
    font-size: 26px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    }

    .bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::before {
    border-left-color: #f2f2f2;
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::before {
    border-bottom-color: #f2f2f2;
    }

    .bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::before {
    border-top-color: #f2f2f2;
    }

    .bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::before {
    border-right-color: #f2f2f2;
    }

    .popover .popover-header {
    background-color: transparent;
    border: none;
    padding-bottom: 0;
    padding-top: 10px;
    }
    .popover .popover-body {
    padding: 15px;
    line-height: 24px;
    }

    /* 3.17 Grid */
    .sm-gutters {
    margin-left: -5px;
    margin-right: -5px;
    }
    .sm-gutters > .col, .sm-gutters > [class*=col-] {
    padding-left: 5px;
    padding-right: 5px;
    }

    /* 3.18 Navbar */
    .navbar {
    height: 70px;
    left: 250px;
    right: 5px;
    position: absolute;
    z-index: 890;
    background-color: transparent;
    }
    .navbar.active {
    background-color: #6777ef;
    box-shadow: rgba(103, 119, 239, 0.2) rgba(0, 0, 0, 0.03);
    }

    .navbar-bg {
    background-color: #6610F2;
    }

    .navbar {
    align-items: center;
    }
    .navbar .navbar-brand {
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 700;
    }
    .navbar .form-inline .form-control {
    background-color: #fff;
    border-color: transparent;
    padding-left: 20px;
    padding-right: 0;
    margin-right: -6px;
    min-height: 46px;
    font-weight: 500;
    border-radius: 3px 0 0 3px;
    transition: all 1s;
    }
    .navbar .form-inline .form-control:focus, .navbar .form-inline .form-control:focus + .btn {
    position: relative;
    z-index: 9001;
    }
    .navbar .form-inline .form-control:focus + .btn + .search-backdrop {
    opacity: 0.6;
    visibility: visible;
    }
    .navbar .form-inline .form-control:focus + .btn + .search-backdrop + .search-result {
    opacity: 1;
    visibility: visible;
    top: 80px;
    }
    .navbar .form-inline .btn {
    border-radius: 0 3px 3px 0;
    background-color: #fff;
    padding: 9px 15px 9px 15px;
    border-color: transparent;
    }
    .navbar .form-inline .search-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9000;
    background-color: #000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.5s;
    }
    .navbar .form-inline .search-result {
    position: absolute;
    z-index: 9002;
    top: 100px;
    background-color: #fff;
    border-radius: 3px;
    width: 450px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.5s;
    }
    .navbar .form-inline .search-result:before {
    position: absolute;
    top: -26px;
    left: 34px;
    content: "\f0d8";
    font-weight: 600;
    font-family: "Font Awesome 5 Free";
    color: #fff;
    font-size: 30px;
    }
    .navbar .form-inline .search-result .search-header {
    padding: 13px 18px 2px 18px;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    font-weight: 600;
    font-size: 10px;
    color: #bcc1c6;
    }
    .navbar .form-inline .search-result .search-item {
    display: flex;
    }
    .navbar .form-inline .search-result .search-item a {
    display: block;
    padding: 13px 18px;
    text-decoration: none;
    color: #34395e;
    font-weight: 600;
    display: flex;
    align-items: center;
    }
    .navbar .form-inline .search-result .search-item a:hover {
    background-color: #f1f3fe;
    }
    .navbar .form-inline .search-result .search-item a:not(.search-close) {
    width: 100%;
    }
    .navbar .form-inline .search-result .search-item a i {
    margin-left: 0 !important;
    }
    .navbar .form-inline .search-result .search-item .search-icon {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    }
    .navbar .active .nav-link {
    color: #fff;
    font-weight: 700;
    }
    .navbar .navbar-text {
    color: #fff;
    }
    .navbar .nav-link {
    color: #f2f2f2;
    padding-left: 15px !important;
    padding-right: 15px !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    height: 100%;
    }
    .navbar .nav-link.nav-link-lg div {
    margin-top: 3px;
    }
    .navbar .nav-link.nav-link-lg i {
    margin-left: 0 !important;
    font-size: 18px;
    line-height: 32px;
    }
    .navbar .nav-link.nav-link-user {
    color: #fff;
    padding-top: 4px;
    padding-bottom: 4px;
    font-weight: 600;
    }
    .navbar .nav-link.nav-link-user img {
    width: 30px;
    }
    .navbar .nav-link.nav-link-img {
    padding-top: 4px;
    padding-bottom: 4px;
    border-radius: 50%;
    overflow: hidden;
    }
    .navbar .nav-link.nav-link-img .flag-icon {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    border-radius: 50%;
    line-height: 18px;
    height: 22px;
    width: 22px;
    background-size: cover;
    }

    .remove-caret:after {
    display: none;
    }

    .navbar .nav-link:hover {
    color: #fff;
    }
    .navbar .nav-link.disabled {
    color: #fff;
    opacity: 0.6;
    }

    .nav-collapse {
    display: flex;
    }

    @media (max-width: 575.98px) {
    body.search-show .navbar .form-inline .search-element {
        display: block;
    }
    .navbar .form-inline .search-element {
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        z-index: 892;
        display: none;
    }
    .navbar .form-inline .search-element .form-control {
        float: left;
        border-radius: 3px 0 0 3px;
        width: calc(100% - 43px) !important;
    }
    .navbar .form-inline .search-element .btn {
        margin-top: 1px;
        border-radius: 0 3px 3px 0;
    }
    .navbar .form-inline .search-result {
        width: 100%;
    }
    .navbar .form-inline .search-backdrop {
        display: none;
    }
    .navbar .nav-link.nav-link-lg div {
        display: none;
    }
    }
    @media (min-width: 576px) and (max-width: 767.98px) {
    .navbar .form-inline .search-element {
        display: block;
    }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
    .collapse {
        position: relative;
    }
    .collapse .navbar-nav {
        position: absolute;
    }
    }
    @media (max-width: 1024px) {
    .nav-collapse {
        position: relative;
    }
    .nav-collapse .navbar-nav {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.03);
        position: absolute;
        top: 40px;
        left: 0;
        width: 200px;
        display: none;
    }
    .nav-collapse .navbar-nav.show {
        display: block;
    }
    .nav-collapse .navbar-nav .nav-item:first-child {
        border-radius: 3px 3px 0 0;
    }
    .nav-collapse .navbar-nav .nav-item:last-child {
        border-radius: 0 0 3px 3px;
    }
    .nav-collapse .navbar-nav .nav-item .nav-link {
        background-color: #fff;
        color: #6c757d;
    }
    .nav-collapse .navbar-nav .nav-item .nav-link:hover {
        background-color: #fcfcfd;
        color: #6777ef;
    }
    .nav-collapse .navbar-nav .nav-item:focus > a, .nav-collapse .navbar-nav .nav-item.active > a {
        background-color: #6777ef;
        color: #fff;
    }
    .navbar {
        left: 5px;
        right: 0;
    }
    .navbar .dropdown-menu {
        position: absolute;
    }
    .navbar .navbar-nav {
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto;
    }
    }
    /* 3.19 Dropdown */
    .dropdown-item.has-icon i {
    margin-top: -1px;
    font-size: 13px;
    }

    .dropdown-menu {
    box-shadow: 0 10px 40px 0 rgba(51, 73, 94, 0.15);
    border: none;
    width: 200px;
    }
    .dropdown-menu.show {
    display: block !important;
    }
    .dropdown-menu a {
    font-size: 13px;
    }
    .dropdown-menu .dropdown-title {
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 1.5px;
    font-weight: 700;
    color: #191d21 !important;
    padding: 10px 20px;
    line-height: 20px;
    color: #98a6ad;
    }
    .dropdown-menu.dropdown-menu-sm a {
    font-size: 14px;
    letter-spacing: normal;
    padding: 10px 20px;
    color: #6c757d;
    }

    a.dropdown-item {
    padding: 10px 20px;
    font-weight: 500;
    line-height: 1.2;
    }
    a.dropdown-item:focus, a.dropdown-item:active, a.dropdown-item.active {
    background-color: #6777ef;
    color: #fff !important;
    }

    .dropdown-divider {
    border-top-color: #f9f9f9;
    }

    .dropdown-list {
    width: 350px;
    padding: 0;
    }
    .dropdown-list .dropdown-item {
    display: inline-block;
    width: 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    font-size: 13px;
    border-bottom: 1px solid #f9f9f9;
    }
    .dropdown-list .dropdown-item.dropdown-item-header:hover {
    background-color: transparent;
    }
    .dropdown-list .dropdown-item .time {
    margin-top: 10px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 0.5px;
    }
    .dropdown-list .dropdown-item .dropdown-item-avatar {
    float: left;
    width: 40px;
    text-align: right;
    position: relative;
    }
    .dropdown-list .dropdown-item .dropdown-item-avatar img {
    width: 100%;
    }
    .dropdown-list .dropdown-item .dropdown-item-avatar .is-online {
    position: absolute;
    bottom: 0;
    right: 0;
    }
    .dropdown-list .dropdown-item .dropdown-item-desc {
    line-height: 24px;
    white-space: normal;
    color: #34395e;
    margin-left: 60px;
    }
    .dropdown-list .dropdown-item .dropdown-item-desc b {
    font-weight: 600;
    color: #666;
    }
    .dropdown-list .dropdown-item .dropdown-item-desc p {
    margin-bottom: 0;
    }
    .dropdown-list .dropdown-item:focus {
    background-color: #6777ef;
    }
    .dropdown-list .dropdown-item:focus .dropdown-item-desc {
    color: #fff !important;
    }
    .dropdown-list .dropdown-item:focus .dropdown-item-desc b {
    color: #fff !important;
    }
    .dropdown-list .dropdown-item.dropdown-item-unread:active .dropdown-item-desc {
    color: #6c757d;
    }
    .dropdown-list .dropdown-item.dropdown-item-unread:active .dropdown-item-desc b {
    color: #6c757d;
    }
    .dropdown-list .dropdown-item:active .dropdown-item-desc {
    color: #fff;
    }
    .dropdown-list .dropdown-item:active .dropdown-item-desc b {
    color: #fff;
    }
    .dropdown-list .dropdown-item.dropdown-item-unread {
    background-color: #fbfbfb;
    border-bottom-color: #f2f2f2;
    }
    .dropdown-list .dropdown-item.dropdown-item-unread:focus .dropdown-item-desc {
    color: #6c757d !important;
    }
    .dropdown-list .dropdown-item.dropdown-item-unread:focus .dropdown-item-desc b {
    color: #6c757d !important;
    }
    .dropdown-list .dropdown-footer,
    .dropdown-list .dropdown-header {
    letter-spacing: 0.5px;
    font-weight: 600;
    padding: 15px;
    }
    .dropdown-list .dropdown-footer a,
    .dropdown-list .dropdown-header a {
    font-weight: 600;
    }
    .dropdown-list .dropdown-list-content {
    height: 350px;
    overflow: hidden;
    }
    .dropdown-list .dropdown-list-content:not(.is-end):after {
    content: " ";
    position: absolute;
    bottom: 46px;
    left: 0;
    width: 100%;
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.8));
    height: 60px;
    }
    .dropdown-list .dropdown-list-icons .dropdown-item {
    display: flex;
    }
    .dropdown-list .dropdown-list-icons .dropdown-item .dropdown-item-icon {
    flex-shrink: 0;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    line-height: 42px;
    text-align: center;
    }
    .dropdown-list .dropdown-list-icons .dropdown-item .dropdown-item-icon i {
    margin: 0;
    }
    .dropdown-list .dropdown-list-icons .dropdown-item .dropdown-item-desc {
    margin-left: 15px;
    line-height: 20px;
    }
    .dropdown-list .dropdown-list-icons .dropdown-item .dropdown-item-desc .time {
    margin-top: 5px;
    }

    .dropdown-flag .dropdown-item {
    font-weight: 600;
    }
    .dropdown-flag .dropdown-item .flag-icon {
    width: 20px;
    height: 13px;
    margin-right: 7px;
    margin-top: -6px;
    }
    .dropdown-flag .dropdown-item.active {
    background-color: #6777ef;
    color: #fff;
    }

    @media (max-width: 575.98px) {
    .dropdown-list-toggle {
        position: static;
    }
    .dropdown-list-toggle .dropdown-list {
        left: 10px !important;
        width: calc(100% - 20px);
    }
    }
    /* 3.20 Dropdown */
    .tab-content.no-padding > .tab-pane {
    padding: 0;
    }
    .tab-content > .tab-pane {
    line-height: 28px;
    }

    ul.nav-tabs li.nav-item a.nav-link i {
    color: #6777ef;
    }
    ul.nav-tabs li.nav-item a.nav-link span {
    display: block;
    line-height: 60%;
    }
    ul.nav-tabs li.nav-item a.nav-link span i {
    font-size: 16px !important;
    }

    ul.nav-tabs li.nav-item a.nav-link.active i {
    color: #191d21;
    }

    /* 3.21 Progress Bar */
    .progress-bar {
    background-color: #6777ef;
    }

    /* 3.22 Jumbotron */
    .jumbotron {
    background-color: #e3eaef;
    }

    /* 3.23 Carousel */
    .carousel .carousel-caption p {
    font-size: 13px;
    line-height: 24px;
    }

    /* 4. Theme Style */
    /* 4.1 Misc */
    :root {
    /* Colors */
    --primary: #FFC857;
    --secondary: #34395e;
    --success: #47c363;
    --info: #3abaf4;
    --warning: #ffa426;
    --danger: #fc544b;
    --light: #e3eaef;
    --dark: #191d21;
    }

    body, html {
    min-height: 100%;
    }

    body {
    background-color: #f4f6f9;
    font-size: 14px;
    font-weight: 400;
    font-family: "Nunito", "Segoe UI", arial;
    color: #6c757d;
    }

    a.bb {
    text-decoration: none;
    border-bottom: 1px solid #6777ef;
    padding-bottom: 1px;
    }

    .form-divider {
    display: inline-block;
    width: 100%;
    margin: 10px 0;
    font-size: 16px;
    font-weight: 600;
    }

    .ui-sortable-handle,
    .sort-handler {
    cursor: move;
    }

    .text-job {
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    color: #34395e;
    }

    .text-time {
    font-size: 12px;
    color: #666;
    font-weight: 500;
    margin-bottom: 10px;
    }

    .bullet, .slash {
    display: inline;
    margin: 0 4px;
    }

    .bullet:after {
    content: "•";
    }

    .slash:after {
    content: "/";
    }

    .login-brand {
    margin: 20px 0;
    margin-bottom: 40px;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 4px;
    color: #666;
    text-align: center;
    }

    .font-weight-600 {
    font-weight: 600 !important;
    }

    .budget-price {
    display: inline-block;
    width: 100%;
    display: flex;
    align-items: center;
    margin-bottom: 3px;
    }
    .budget-price .budget-price-square {
    width: 15px;
    height: 3px;
    background-color: #f9f9f9;
    }
    .budget-price .budget-price-label {
    font-size: 12px;
    font-weight: 600;
    margin-left: 5px;
    }

    .gradient-bottom {
    position: relative;
    }
    .gradient-bottom:after {
    content: " ";
    position: absolute;
    bottom: 41px;
    left: 0;
    width: 100%;
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.8));
    height: 60px;
    }

    .text-small {
    font-size: 12px;
    line-height: 20px;
    }

    .text-title {
    font-size: 14px;
    color: #34395e;
    font-weight: 600;
    }

    .text-muted-transparent {
    color: rgba(255, 255, 255, 0.8);
    }

    .img-shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    }

    .colors {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -5px;
    }
    .colors .color {
    border-radius: 3px;
    width: calc(25% - 10px);
    padding: 10px;
    height: 60px;
    line-height: 40px;
    text-align: center;
    margin: 5px;
    }

    blockquote {
    padding: 20px;
    padding-left: 40px;
    font-style: oblique;
    background-color: #f9f9f9;
    border-radius: 3px;
    position: relative;
    font-family: "Time new Romans";
    font-size: 16px;
    letter-spacing: 0.3px;
    }
    blockquote:before {
    content: '"';
    font-size: 30px;
    position: absolute;
    top: 10px;
    left: 20px;
    opacity: 0.2;
    }
    blockquote .blockquote-footer {
    margin-top: 10px;
    }

    .bg-whitesmoke {
    background-color: #f7f9f9 !important;
    }

    .ion {
    font-size: 15px;
    }

    .fas, .far, .fab, .fal {
    font-size: 13px;
    }

    #visitorMap {
    height: 210px;
    }

    .sidebar-gone-show {
    display: none !important;
    }

    pre {
    border-radius: 3px;
    }

    .circle-step {
    display: flex;
    margin-bottom: 10px;
    }
    .circle-step .circle-content {
    margin-top: 3px;
    margin-left: 13px;
    }
    .circle-step .circle {
    border-width: 2px;
    border-style: solid;
    border-radius: 50%;
    display: inline-block;
    width: 32px;
    height: 32px;
    line-height: 30px;
    font-size: 11px;
    text-align: center;
    }
    .circle-step .circle.circle-primary {
    border-color: #FFC857;
    color: #FFC857;
    }

    .pe-none {
    pointer-events: none;
    }

    .contact-map {
    width: 100%;
    height: 100%;
    min-height: 400px;
    }

    #visitorMap2,
    #visitorMap3 {
    height: 350px;
    }

    .shadow-primary {
    box-shadow: 0 2px 6px #acb5f6;
    }

    .shadow-secondary {
    box-shadow: 0 2px 6px #e1e5e8;
    }

    .shadow-success {
    box-shadow: 0 2px 6px #81d694;
    }

    .shadow-warning {
    box-shadow: 0 2px 6px #ffc473;
    }

    .shadow-danger {
    box-shadow: 0 2px 6px #fd9b96;
    }

    .shadow-info {
    box-shadow: 0 2px 6px #82d3f8;
    }

    .shadow-light {
    box-shadow: 0 2px 6px #e6ecf1;
    }

    .shadow-dark {
    box-shadow: 0 2px 6px #728394;
    }

    .is-online {
    width: 10px;
    height: 10px;
    background-color: #47c363;
    border-radius: 50%;
    display: inline-block;
    }

    .gutters-xs {
    margin-right: -0.25rem;
    margin-left: -0.25rem;
    }

    .gutters-xs > .col,
    .gutters-xs > [class*=col-] {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
    }

    .beep {
    position: relative;
    }
    .beep:after {
    content: "";
    position: absolute;
    top: 2px;
    right: 8px;
    width: 7px;
    height: 7px;
    background-color: #ffa426;
    border-radius: 50%;
    -webkit-animation: pulsate 1s ease-out;
            animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    opacity: 1;
    }
    .beep.beep-sidebar:after {
    position: static;
    margin-left: 10px;
    }

    @media (max-width: 575.98px) {
    .fc-overflow {
        width: 100%;
        overflow: auto;
    }
    .fc-overflow #myEvent {
        width: 800px;
    }
    .ionicons li {
        width: 25%;
    }
    .icon-wrap {
        width: 100%;
    }
    }
    .background-walk-y {
    background-repeat: no-repeat;
    background-position: 0 0%;
    -webkit-animation-name: backgroundWalkY;
            animation-name: backgroundWalkY;
    -webkit-animation-duration: 70s;
            animation-duration: 70s;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
    -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
    background-size: 100%;
    }

    @media (max-width: 1199.98px) {
    .background-walk-y {
        background-size: cover;
    }
    }
    .background-walk-x {
    background-repeat: no-repeat;
    background-position: 0 0%;
    -webkit-animation-name: backgroundWalkX;
            animation-name: backgroundWalkX;
    -webkit-animation-duration: 70s;
            animation-duration: 70s;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
            animation-direction: alternate;
    -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
    -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
    }

    @-webkit-keyframes backgroundWalkY {
    0% {
        background-position: 0 0%;
    }
    100% {
        background-position: 0 100%;
    }
    }

    @keyframes backgroundWalkY {
    0% {
        background-position: 0 0%;
    }
    100% {
        background-position: 0 100%;
    }
    }
    @-webkit-keyframes backgroundWalkX {
    0% {
        background-position: 0 0%;
    }
    100% {
        background-position: 100% 0;
    }
    }
    @keyframes backgroundWalkX {
    0% {
        background-position: 0 0%;
    }
    100% {
        background-position: 100% 0;
    }
    }
    .overlay-gradient-bottom:after {
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: false;
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 65%, rgba(0, 0, 0, 0.65) 100%);
    z-index: 1;
    }

    .overlay-gradient-top:after {
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: false;
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0) 65%, rgba(0, 0, 0, 0.65) 100%);
    z-index: 1;
    }

    .index-1 {
    z-index: 1 !important;
    }

    .index-2 {
    z-index: 2 !important;
    }

    .index-3 {
    z-index: 3 !important;
    }

    .index-4 {
    z-index: 4 !important;
    }

    .index-5 {
    z-index: 5 !important;
    }

    .absolute-bottom-left {
    position: absolute;
    left: 0;
    bottom: 0;
    }

    .bg-paypal {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MzhDMkFERDA5N0ExMUUzOEU3NkI3REVBNTBBQTM3QyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MzhDMkFEQzA5N0ExMUUzOEU3NkI3REVBNTBBQTM3QyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+pzjbbwAABEdJREFUeNrsWGtsk1UYfnpd13Yd68boXOmAgnO4VSfLUBIhRhYIGkPMDHHGCJloNOIPL9EYkKB4SURiovBnRn+QQaZchUgQp8KcDlh2MawwV7YJG1u3sVtvWy9fPef9sMt0Gp1JQ/KdNzl9z7Xt85znfd9+VdlLKx0APmVtFWt6KMPCrJ1h7WmNJfeeg6xTxpoGyjGO1clasZq9rIRy7X61gmQ/oxLUULgJAgQBggBBgCBAECAIEAQIAgQBCjXtbA8+UlaKPTufmXrADkdx+UoPtu3aj6aLnbN7MtGnILPABZVKJU/E44hFwgj0X0doePBvz/H98jk1Btuak6OAVffeSZ6D/qymFgM3RuEqWIAPt22ieb1eiwX2bOQ7c5GZkUZzOp0W9pws9gg29bGGFD3NmU2p0JnTCIwUiyI46EUkGCBSLI6FUOt0HCnzemhTjeQTt2g00T4pFkmeAkpci8nvrvoKJ79vgrvjGnZt3Uhglxffjpq9r0wDeqK2EQ1N7dj56hP48kQ9Xnr7cwJde2AHbptnxZY3q/Cd20t7J4ZvwNf7G4HKWnqXrA4GODO/CGrt1FeOToQw4rkEndFM40jAnxwCrHPMWOSYR32fP4TSu5fgqcceoHF942Xyr7+3D13XvKQCTszDD5bg0Nc/0VpRQR75Fzc9ROCb2zpx7JvzsOYX0rwUjdAtm7Jz5DELAykaRWCgD9FQkFRimb8QWkMq22eCzvQHAYHkELCsaHGif+CTlxP9C60d2PpBNZHjuiMP5evuQ67NSmtXewdxydNDfafDBmeeDZsfL2NhHqe8AaYWDoibOcdOjVssHMZYt4cnBKg1Ghjn2pgy9AklxCZDUwoIJkkBJS4neX7DR0+dw/CoHy3uLrS0dWH9muX4+K3NtFZ95CyRUbF+JS784kFv/zD8wQmYjQbsfedZaLUa1Bz/Ea3ubugt6XLekyQW//0snmNM4kFEfONQ8+TI5M9zQHDIi7BvDGm5DlIGJ5ATEqf9oWQRICugav9p7Dv8w7S18nUryH9xvB5HTjXgo+2VNG5s9ZBvv9LLFOTE0iXz4Q+E8P6eQ3LSNMqJcnJsBP6+nmnvaUjPgIrd/uT4KILePhizbXLlYTH/f25/1lXAdTOGf2ZJ7c92sf0q+deefxSnq3eguHARjRua5b2/dl5P7OUJdGjEJ1cIlsllUL6/vGeEKYFbimUO5hYWw2DNkuf94/947t+Yyl5aGf+vh3KyMyBJcXiHRmesySuW5VN5O9fSgYx0E1WD7p4BWn/jhXI89+RaeLr7UFaxHdGYJN8Ei2mVWsNifnJmqbKkqEkxIMpuPR6XqAxyyfO8wPsx1ufhkBQCZmtp5lTUHXyXSmXFlt2oO+9W1k/hyg2rCfzhkw23BPikK0A8DAkCBAGCAEGAIEAQIAgQBNxiBIQVjD/GCTirYALqOAH8H4tvFaaEyE3MG38XYABCjHjqM0/uowAAAABJRU5ErkJggg==");
    background-repeat: no-repeat;
    background-size: cover;
    }

    .bg-visa {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2N0ZCMEUyQjA5N0ExMUUzQThCQUUwNkRBQTdGOUQzMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2N0ZCMEUyQTA5N0ExMUUzQThCQUUwNkRBQTdGOUQzMSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+NGpUrQAABKJJREFUeNrsWHtMW1UY/3ELFAq0tCuDQjtbnm7SjbkBA3lMN4LO6QwxzmWSmKiJfyiJMWaJ/0m2mCzTaJYZXTYN6kKi0z/cDIsyF0eGcxuMOXkMxvv9KOXVVvr0nHPpbe8kMUpS/uj9ktN77ndPzznf73zf7/vujSg6WL8JwBnSykmLRniIk7RfSXs1kvycJW0vwkvoQVeQVseRnzKEr5RyYeT2q4mMQ5iLBIAEgASABIAEgASABIAEQNhK5H8ZrI+zotLQiQr9PWjkNqbz+DhcGDTjk/ZS0dgXnsrGk6VG1u8ZnMP7n93AB0fKoFbFMN2Jz1vQcd/C+rqkODxfmYWduclITY4n9SmH2XkHmm6N4uMvb4vmfbN6O7blaMFxEey+5ugVLNldoQFgxKbG2a5i1HUXoiqjE4czbyCWs2Pfpj9xuuMxuH28Q9HNHdr/MJI3KNj9dz/1IFYeiV15qYjg9w2L1cGu5fl6vFdThOgomWit1I3xeChNKdLt2qbDoadzRLockwYt7ZOhDQG3V4bzvWaM53+BUc6MaM4Do9Ii2qjf+LnFZTQ2DzFj/MbbHC5MWuwMlCOv5QvG3+maZid+6lwbLv82hPYei2jdlw5s/sdecrM2hC4EgsXr9WFmwYu8/R9i8Md3ka2awv35JPbswJ4MYdzFK31Ydnpg0gdOc2BkgV03Z2iQqJQL+tpT1zE+bVt1vWyjGo9u2cj6M8R7tOpY1n9kjQCsiQR/vzMOjSoWun3HkJ7kZTq6seLtqTw/eHzM/amY9Crhf30j8+w6v+QUzXeCcETJjrRV16qqyBT61EPo3FS2ZK4rABPsqklUwFRWzfrPPpEOmYz39ebbY5icsbN+ukEV5AE8AL1Dc/jhcq+gpyAdf6cUp2v3wpCSIOgTE+SoXCHUuYVl/HJ9mBCrlV+bkCol0XUBYGrWjr5h3piCnTlI0cbhmccD7v9NQ7fQN6YFAOhfCQEqx8/cwsmv27BoC3hDbrYWn9bugSqBD4/nyOnLo3me+Ll5EC63F3e7Z4TxawmDNdcBNAzYpxVy6jXVeUjWKgQjWzt4dqZkl5KkCAAwOh/gEp8P9Re7UPXGBXx7KQCYWhmD8gI9mzfY/ScIR+Sbk+F0eYOIUBt6EhQA+GOCpTwquwsNgp7Gvo8PU5YBuJUUYHe4WVj4T5QSpD8zfFTXisoSI5Txga90uwsMAuH564AHhZLpugHQ1jnNjPAbRGWJuHPD1f6g2FYGuT9/+ltJMXPsrRJcaxlF94CVnWgZqQn8xrs9Xtwk4NbWFP/rHnJMakRFciw0Qg6A0+Uhrj6FojydoGtoGoDjL7eI3B4EgOriFVGM3PwEF5xiT37VRsg1RohvCsjhtxtYXSGkTVJAFZKag9YRWSRN+ivLkAJApZEQkzoon5+/1CN6LiOVYVffLO8xpNihcq/fikZS7JgJ4SURF6ceMG21M4/6noQPff76i1sxNrXExt+8O4nhiUXRvNdax2DQ8dlCT0ro/wNARNHBep/0NigBIAEgASABIAEgASABIAEgARCeADjD2H4PBeBqGAPQRAF4hb7QhZknuFZsfvlvAQYAHheK9jMfKWkAAAAASUVORK5CYII=");
    background-repeat: no-repeat;
    background-size: cover;
    }

    .bg-americanexpress {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5RkI5MDAxRjA5N0ExMUUzOUQ4QkU1OTZBNzYxMzREQiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5RkI5MDAxRTA5N0ExMUUzOUQ4QkU1OTZBNzYxMzREQiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+jutENgAAB2FJREFUeNrsWGlQlWUUfi7cy2VfZFdAFkUQUVxAwz3TLM3d1DQEpRzN1GaymHEdl6yxcVyyUcfQynBJUxx1zNBEMERRSBkUEdkR2ZEdLtzOebn3E4p+hEN/7j0zL5fvvd/33vc855znPO8n6xMR4wbgMI2xNIygG9ZEI5ZGuJz+fEfjDeiWcaAn0vjegP6Mge7aaAMdSvvOzNAAOm56APQA6AHQA6AHQJdNrv2np7Uxrn4aDLmhTFw3NLfi0v3nmDXUWbq5plGFcV/dRC8bE0R/HNSlH6xvbkHG81r0cTCDqZGhmKusa8bVh6UY420Le4vOZclPt/KxcISLdN3Sqsa+q1lYM9FTmvv610wcvJ7dNQDeD3bF9fRSRJxOE9e7F/jj7YGOuJxajPW/PBRz+xYOxOKRbnCxMcbppEJ8eSlDzB8ODRD38Vx72zbLFym5VR3mFSQ9RnjZYNtMX4QfTZGeZ9iXRCbjWVWDmLsRMQqTd91CXZMKkwc4Yv073lIA2EJpH8vHu+NJcS3mH0gSv9XlDLA0lmNeYE8sOZICbydzFL9oxAFC8tgHQ9CsakVVvYoio8Q3hPiBkIEwkhtgyu5bMFPKUVjZABVFo54yRk7O7ZrnJy3e19EcCZkV0jzfdyW1BCfvFJBTDqhtbBH33c97gYgzaZjY3x7LxrmTPJPh5O0CFFc3YlqAE87cK8SK191hQfvkvfQwM8K3v2fjTVqjVa0Wc7zPLnPAu+Q8I8nRWkRpFkLZkPi0AmmF1dKNoSNdcTurAulFNYh7XIacsnosHe3WYbE6cugEbVw72AE2djy3vB75NEpqGkXq+/WykJ6Lf1IO8gNbZ/qguaUVk/zscfRmnnBw7WQvyg4ZfvwjT7o/fIwbbM0VWEeZyc+9EglySoaQc4dicyCjPIzLKEcKRYSN57T2lr8D3GxNRN3x5kZTvfbvafE3YS2Daw8TaZgoDCRgOKKn7hQi4UmFeM7OXCk9p9Z4wZniZW8muIczq6K2CXtjsmBtKhfPvmhQifvMCMAtM3yQTAE7lpD/aiQ4dZAjmlRqXCMSCu7TA3JyQk4/MMzdWtS1r7O55Fz46N7YeO6RuOby+LspyeGRtIbWLIwV4pOJ7ezKIJTVNCG1oFrU/t3sSum+IA8b8bmJ1p7k54CDBHxvAru3ramY5zXPJRcJELQ23scOU4ijTiUVvBoAYaNccSIxH3a0yb3v+YuNGVEkPOxNMX3fbUSnFMHKRA4DSg/uCJHxuXC2UmK4p40oGf6OQeNoqyh9V0U96ECCPM+1y7b9YgbCKNv4GY65mbKtCwR6WGPz9H6ibOIzHomM2Ditn+gUXGrj+tniOfESZwY/yxxUQBmygYiRs6CWyFEh71pHl6nVL6uIa56d5mhfWxssWmN7K6GaZjJkq6htho2Z4j/92OrjqdizYMA/5quoDcYSr7xG3cHW3EiAzbuatCsB2aV1wlHmpfYWRW3R0coYE3ztXqkNyvpExKihw6ZXgt21cMaOCf/6HbfSBQfvYgoR8JbpPqL7tLdG6umc+nZUDlwS7a2aOgF/5+9i2enadU0tyKN2y91Eq2rZ8ivqRftlDfG/AMA2dU8iijTK7mXRybCZCO7MikDYEvHOIxXHLa+huaWDWhxAOmE7kega4o34jDLpOxZfM4c4C5LWqkKtBbhZYedcP+y8/KStlWvobeUET0Go2y48RqlGm7BdWD2iewHgaLFemDuspzTH7eyzn9NIavvh89O5guU3TfMWBPnJJC8EuFqKdrmW7jlCHaeWIupoaYx1U/uSSFLjBxJE+69lkUJ0FAqQyVFLhNxtTpHKjE0vwxezfWGubHOvn5OZWN+QwN8686VktiJ9Ie/uGksrrBHtjc2PBNAO2hgD89GxB6KlHftwKLSJygLH0kQhNL8QSFJJtAglqSIA+ODkYWcqpTK37RJNVHl97gwiun8+F+XDgiyI2qwDda97OVW4SK2UgRpM2WIsN+x+ACzJSd5EmyBSCu3OeqFNXBlAQS2XpTLbriuZlP4kfClS3BLDRrlh/dlH5GCTUJL8WEZxDeYH9RKtmo1bcfv1Zwx2Ih0jQxIBwxkSGZcjOGE3tV8ORC5lXBZxCB/QmGO6HQA+ObZXh1zTiU8rcWjxIJHKoXQC3Eqylo01wjhSeHzUZaKTa5xk6czKs4Yy5xRtnGt8OR2a2DyJ7LTrc2SZTxjAQFKXvE5CZjkp3VZBvC50jOfhaKkUZx0+d3QrALwhPjjxkPouObV/kT+lqhIHQwYhLDIFm8+ntylKIr9N0elC5LAdXzZUlAVrNVaCUYkFcCeJzKdXThp+Jjr5mRhaEpxDfLPh7EMpwzyJLFfQsZnPNVoyNVYYYjap2pF9e3QvABdWD+90nk+Vc/YniUPY+VUdX6z8llbS4Xq3RjlyZNnYwTkaUk3aOLbT9fmorX1pUlTVSGRoKK2jfbHDL2VWRaXqlaD+pageAD0AegD0AOgB0HEAmnTY/xYG4IYOAxDHACylEaNjmdCs8Tn0LwEGANFzD+vUOoKUAAAAAElFTkSuQmCC");
    background-repeat: no-repeat;
    background-size: cover;
    }

    .bg-dinersclub {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3QzZFN0NDMjA5N0ExMUUzQTlFREIzQkJBNTFDMUVBOSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3QzZFN0NDMTA5N0ExMUUzQTlFREIzQkJBNTFDMUVBOSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+DhLVaQAABA5JREFUeNrsmHlIFFEcx7+r5qqb95GWeaRWpBamhhZ2UFKupZ2S1h9Z0QkdEFF0KR0UEf1RWFAWREFaJF1GEZgWphGdVt6laZalrpjttofbe2s7u9OYGbQxy8wP3rIz83tv9/eZ3/WeBPITAQBOkzGFDHsIQ9RkFJOx0hZhsy+TL4lk2EI4Qm0NISPKhnxMhnAlwUZAbt+nJ9hA4CICEAGIAEQAgha7//EjwzxlWDZjFBKj/DHE3Ql6vR5eLg7wdnVkdLpVWjS3daOioR1Xy94i/34dVGqdxf+bhLTCekstLh1ki+ylMVg4KQQ5NysMRjV96Waeuw+WQh4bgI0pkYgd6cOa+6G9G1vPlOFCUY11AnCV2aMwW4437xXYcPIBvn3X/j4OJRJsTI3E4RXxpDORsJ7l3qnE6mPF0PVY5j3RvUDWP48r0l/d2JOE4pct2HyqFBpdT7/61LSyyk94Vt+GtIQQAxCjjA/xgp+HDNcfNVgPgC0LxpEYd8S6nBIWlPBAd7QqlMy9Eb4uBjhqbS+gqmYFVBqdIVeYS3SoN2pbOvHyXTv/qwB1/fWzI7DmeAlJdr33PJ0dcO9gCrYtimLpzowejoqcNIwN9mTuHbnyHK8bOzjrHl4eD0d7O/4DyJgahmtl7/C5U8nEd8GumZg0xrdP/UAfZ9zemwwft96KQGP9QP4Tjp6fhxMWJYzgPwB5TAAuPahjrhdPCUVCuF+/c3xJady5OJq5vkoAarTcvDFnQhD/AVB3flr3hbleQjxiYJ4TCmPu+6rUoJrkg18lJsyb/wAGOwxCFzHAKKOHuw1oHs0TPmaN0ccOZZ9hwHsAKg273uv/onybq37X6PrsF3gPgLa0TlJTtn7VOLDSRcujeYn095JxdFo6vvEfQCXp/CZHmJLeQFvZC/dMeh7OUtIzeHB0yqs+8R/ADdKxzZsYzFzTilD0ornfObUfOrH/oqn0pcYFc1piKgWlb/kP4HxRNaaP8zeUNmMOmL/vDu4+a/qt8Ul7CtHWpWI6xu1pUVzPalIQmPXWsRlaNWsMUuICMSf7FpMEaQILG+aKqiYFqwmica9UmxLn7vRosoOM5STS5KxC3HrcaB0HIqduvya1XItDmXHMvR5ihbnxVBpau1jGzyehszsjhrPejnPlFjHeYgDoG8s8WoTgIS44u3ka3GTSfvXt7XrdPm9bIiv26Tr7857g4KWn1nkgQt1+09xIrJWHk9xQgyul9awdHS11NOFtSo1E6FBX1ly6IdqS+9Bib/6/ADAKPf5KJ3uClLggwxaYgqGbH/N+gR6YNH7+isc1rYZsf628Ado/nCNYDQA+i3gsLgIQAYgARABCB6AWsP06CqBEwADuUwAryLgrME/Q/LR52Q8BBgBm3GJpfFCpogAAAABJRU5ErkJggg==");
    background-repeat: no-repeat;
    background-size: cover;
    }

    .bg-discover {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MTYxNkM1QzA5N0ExMUUzODkyODk5REFFMENGQ0I0MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MTYxNkM1QjA5N0ExMUUzODkyODk5REFFMENGQ0I0MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Nbpv+wAABOVJREFUeNrsmnlQVVUcx79gGWtvGCuteBgOSykiISQaO5GgwWtKZlJkMfpDrZQmBNOCxqJF0UlsEaPYbAMCCp1JnjFsZSKyiRA8FkGCARyBx9Lb7judexzuSKMNIU7Lu7+Z39x7f++sn/P7/c59d44RIcQGQDpVH6rzYRiioVpO9QUjCkBOb56AYUoZD0BtQCv/Z+F4AAQGLCIAEYAIQAQgAhABiABEACIAEYAIQARgkGI804J2Do5MXVxXYld8PIaHR5h92/YXESp7GjzH+IQEPGgthZPzCuTm5l378qDRMPt9ixbB1NwCXt4+1xrUc9CUpGEiKQDju9zw+0cx0Pe3o7a2jvWTn/+t0HdjYyOz5eXlC+Pg1dXNHS0tLcKzx5o1+Dwj4/YA6OnpgYO9PRwc7PHxJ0fhFxCAsbExDA4Noa+/HyVyOT44nIqQkBAE+Pujo7OT1QuPiEDqkQ8hC5Vhz2u7MXTlCrOrvk6CunA/9IOXQMaHoWsqw+T+Z7HiAQmMjY1xNC1N6Ds7JwcDAwMIDAxk41hsY0PbC8W64CAKWMtsPt7ekNwtwdZt2xnEGQuZodx5lwnJys5m9z+fOUPmm5iSd997nzyzIYysdH+MpB07xspQEEKds9XVzEZXRbCNjIwQrl9BlFuX3FAn03eQt95OZvXa29uJVqsl1KsIBSmM43DqEaG9+voGZisrLycdHR3sPuf48ZlOixjPJm5We3jA2Xk5KisrBVtwUBDuWbAA658KwdqgYOa2VVU/wdLSElGRkUI5iUQCTnHu5p9o6G9RkREwMjJCRmYm5KdPMy+LjooSyiS/k8xc3tfPX7CVlJTgzX37mPe4u7nNeC53zDp50I54nRKpVIoLFxqRnZ2DlJQUBK9bj9jY2L/fMNGztvz9/JCVlY02hQLW1tbseUqcljnBxcUFVlZWgo0PMz7f5Od+A0dHx7nPAddLTc15UNeDr6+vYBsdHYWS6iuxO7F37x4W60sfeZjlCRo6QjmlUol5S1xv2vY8O3d25Vd8YHAQRUXfMY+4HrZMJsPBlAN4nfYzJUmJiexa39Bwe7ZBGvMswVlYmKOwsIhSdkBZaSkio7egu7ubrsoy0DhEzPNbkEuzNQ+js6Mdz23ahOLiE4jYvBk2NlJ88eVX+LX5IlSZcdCeLZw+mPmmMNtdBOP77aBSqSBd/BAD29rSDFtbW2EcXp6ezANMTU0QtiEM7qtWQV5yCgUFhfg0PR1VFRVwdX10bpMgn+h4fdzTi7yRmEjoSjL7q3FxZGN4OOnt7SV0OyRmFpZkqdNylpR4UavVhG6b5N6FC4mJmTmrz4TTEdX3h8hYwmqifMmRTBzcSHTdTdP6fHnHThL45NobjoNXmgNIa2sru6deSSgsZouMjp5xEhTfBEUAIgARgAjAECeuv9wMddEBwwOgH+qBpvgQtDUn2VunwQDgOmuh+TEDuvpT7K+4YYSATgNdgxya0kwGwGByAHepAbqaE9D+UgAyMWIYSZDraYKu7gfozp9kcf6/3wWIehKcohpccwVzc/3Vvllvg/+JIzL8hPVdddC1nwPXRifeRWNap71lx/l3HpLidND3K8Bdvsjimeuqh/631mnZe46EHZLij8l9RtX7n/AEMn4V+j46WTpBfW8zU66vbS5W96+Eb5w/JhfzhwADAEp6pBLh7YWZAAAAAElFTkSuQmCC");
    background-repeat: no-repeat;
    background-size: cover;
    }

    .bg-jcb {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3ODJEODgyMDA5N0ExMUUzQUZBM0UzQ0IwMzlDQTM2RCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3ODJEODgxRjA5N0ExMUUzQUZBM0UzQ0IwMzlDQTM2RCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+RS3J7gAAA3pJREFUeNrsWHtIU1EY/22z+Zo1Tc10zVctXSWZFib2olIxE6KgoqclERRoUPT4wzAii6AIgrCkt2UU/lVYUfaCHqL5gLKmtsxX6dxSm489XOcec2gzZ7Bi894ffLtn537n277fPef3nXN5WJwjBZBLbBExIdgBHbFnxNIECFp5hzSWExOAPWByDSUWyScfC8FeLOCzaNoPOxP4YDk4AjgCOAI4AlgNJ1sGm+IrwpndsUiYJ4Gbs2Vo3pLz9Jq2Igz718/G1IDxFj4HLxTj+I1ySHzccXrXfCTFSEeMZTcEuLs4oehU8rBJDcbOFDnO7Ykb0ceVJPyYxJJJJjjOElizKMRq8gz2rYuw6rMqLui/JG9TAiZPdBuVX5Cfh1Uf6STR2BVBPo/HVYExWwV+R01jB9q1OtoerA+azl6UfGxFU1sXdPo++IhdEOI/HuFSMb3/Vd2FUoXKIh4TY4K70HEIyDj7Evdef6Htu9mJ9Jp64inyHtVAb+ijQjcj2BPNhIjymjZkrJlFfS7fV1CTB3qSiiBAQ6sW3zTdcBEKcOvwMqTEBjoGAcOBSYxB5uY5yEqNNvf/6NajvkWLqw8V5r78zKWYFeKFd581mJl6Gz06Iwrf1Ds2AfRHySn80MbIIX0i13EIDxQP6Tty9S28PJzxvk5Dv88N80H66pmOKYIC/t+rv5wQEjXdG8uiAmj1qKxV4+bjGvskQFHfbha8gSld+Undv20luU8btLExGPuQnVc+ZDzjX1X33WJztSM5HAc3REIsEqJXb8TRa2V0vN0tgYIXStx9VYc5Mm/4ebmhuKqFqrzzOAGObItGqH9/FdiSIMMN8hSzrpQiv6gW8iAxUf1ulFWrzCI4gKQDhRA6CSg5alI56PhEGV1CtgIPi3NMtgi0d20ENsXLoGzuQFtHL0wmE/wnuiNG7gtPso4HDjCmJztoMrQMqkgZNBjhK3Y1l8HMSyW0DO5eZbnWGT0Inuxhn4ch5qlEEMVmzBqYROKjJX+8z8ygKDKTuJ3gWCLA2GdiNwHK5s5R+TWqtDaLZVcEnMyvsOpT3dCOgudK67FuVdjsf/3znWBtUweOXS/DxcKPf/Tp6jXgQXED0snZQdtjGDEW87os994H+yuDnAhyBHAEcARwBHAEOCYBOhbnb2QIeM5iAl4wBGwn9ohlM0H/K+etPwUYAO7UFu8nZtFbAAAAAElFTkSuQmCC");
    background-repeat: no-repeat;
    background-size: cover;
    }

    .bg-mastercard {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAoCAYAAABOzvzpAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0JDOEEwQkQ5QkJFMjExOEZFQUIwMEM5MDY5Rjk1OCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2REIxOTA4NTA5N0ExMUUzQTM0MEZENTU0MTExMTk3MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2REIxOTA4NDA5N0ExMUUzQTM0MEZENTU0MTExMTk3MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjNFQjYzNzExNzYwOUUzMTE5MjFFQjVEQjRBN0YxNUQwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjhDQkM4QTBCRDlCQkUyMTE4RkVBQjAwQzkwNjlGOTU4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+XxeyrgAABOJJREFUeNrsWmtsU3UU/93e2wdryzo21r2f7GX2YGOsC+KmM5MoRMyWICrgC2MkYCSRT8ZADJqIUePzg4iPRGMEBaODoV8UFhgje7ixh869YOs65rq1g7brvb33eno18YsZdq3pTHuS0/b/zz23//O7590yTOXzGQA+JK4l1iAyiCc+R7ybZVI2fEUf6olZRA75dc0lLlfRSw0il+5QRZDZ/6MlqBDhFAUgCkAUgCgAEU3cf3HTlaKAxrmrqJ+fRLHHgViRV/Zt6hX4OWYVTsemoZnYxzB/PwlGxubkMeKrqE6YQqLWDY1KgkPQoscRj7NTmfjyWh6cQmizNkOlsByymxHvsg/hwFQfjATCYjSmMeDF1HKcN5pRlziBwyWXkG90LCozT8q/MlCJYyO3QV5uAKhlCe9ca8O9TmtAcheK43FPw3BAMt9NZuPp9rvAS8F7sL8XOBSKJ//2eBs2B6i8nzKmPbBDB2PWwr+WKSBLyTU4FSCWRRB8xD6CLY6JJcsbzjEQrIGFowdSR/Bo9kD4AdBLPvL53iAPIePG94aA5V4oaoeeE8ILQANFe9NfUT4Y0pIBeSYDi/BxGi+2pQ+FFwB/qlMlxEG7cf2fQSU1CRpL+dJy8jAdh1FBnVULTf59YDjt4gEsoQBb0m3hrQP8eV6/6yGY3jgIq7kMCV+8D8nlxuxj+8EV5MA3Og7JPgetpQKS2w1dfQ1E23V4TjRBXVwI39gExKlpqEsKIfM2GBpfgsqQBFlww2cfBKs3Q5qfgOz6HaqVqZAXHJAp47CxGTDubELJkbLwAhDv80K9rhSyZwHG/U9BU1mK+TePImZHA7icTOi3b8XCTxfBmlfD9dnXyprvGYDh8e3gO3oQ8+D9mK7bBnPLKXiaz4BLrYLj3VJA9EJn2QM2LhfatTtws2kv9JuOwHPhddrfS6D1EDBWrMJM+LOApqIY/OUuGJ99EsKvw/D9MkQuUQV14RqIM3YIpLC6KI++TQU2KRHzr74HLi9bcRe+u48ALIHn2x/gvdgCaXZIUZ6hQonL2Ah2dQEkeuqcma5pfUs5sjB4Bnz/SQKhO/xZYC7WBC4rnQ7fAfeps2DTUsg5WWjIpEWrDUJ3vzJ3EfoHoa2uIDPnoSktAtmxsse3diprvvMKuUMfWcA6GLZ+AF31PnDJ5RCd5CK2brDJa5V3hlXTNeuhq3oGPlrbvbrwukC/zgTzpochTlAwoprS9clxUqod0pyT9ibJZ73g8nPBX+okV2iFtqYavqFRTNc2Kn7vbesi3zZAnJ6BNecGNB/VgY3PhzDWAvH6FcXMZe88mBVxtO6Fz3oZov03SM5xAmcc3c6E8JbCO+3DOGztCk1dvtuNmJTAUuqB7tvx8WhR+FzgZFwmHGzwHZojmQtY+Tlei+Pja8IbA1wqDq8lFQd1D5maCXX9QsByL1Nn6PKpw58FPo/PQZMpbemHuNuLxKybAcl8Y83Bp0GYfkgB8AeR59Kr0BybGrDsidwMxGzwBNwO7+m4MyQzgZC0w36SGAanTemY5TSodNuhpWrtVgORfRkWHDUUoH02EWWmGcRrF245EDnYZ8GhXgtEmVl+E6GIH4n9Hyk6Fo8CEAUgCkAUgEgHgI9g/UU/AOcjGIAWfyns/7tYCbG/m4mUf4r5f0z4kfiJPwQYAB3H59j066DAAAAAAElFTkSuQmCC");
    background-repeat: no-repeat;
    background-size: cover;
    }

    /* 4.2 Section */
    .section {
    position: relative;
    z-index: 1;
    }
    .section > *:first-child {
    margin-top: -7px;
    }
    .section .section-header {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    padding: 20px;
    display: flex;
    align-items: center;
    }
    .section .section-header h1 {
    margin-bottom: 0;
    font-weight: 700;
    display: inline-block;
    font-size: 24px;
    margin-top: 3px;
    color: #34395e;
    }
    .section .section-header .section-header-back {
    margin-right: 15px;
    }
    .section .section-header .section-header-back .btn:hover {
    background-color: #6777ef;
    color: #fff;
    }
    .section .section-header .section-header-button {
    margin-left: 20px;
    }
    .section .section-header .section-header-breadcrumb {
    margin-left: auto;
    display: flex;
    align-items: center;
    }
    .section .section-header .section-header-breadcrumb .breadcrumb-item {
    font-size: 12px;
    }
    .section .section-header .btn {
    font-size: 12px;
    }
    .section .section-title {
    font-size: 18px;
    color: #191d21;
    font-weight: 600;
    position: relative;
    margin: 30px 0 25px 0;
    }
    .section .section-title:before {
    content: " ";
    border-radius: 5px;
    height: 8px;
    width: 30px;
    background-color: #6777ef;
    display: inline-block;
    float: left;
    margin-top: 6px;
    margin-right: 15px;
    }
    .section .section-title + .section-lead {
    margin-top: -20px;
    }
    .section .section-lead {
    margin-left: 45px;
    }

    .main-wrapper-1 .section .section-header {
    margin-left: -30px;
    margin-right: -30px;
    margin-top: -10px;
    border-radius: 0;
    border-top: 1px solid #f9f9f9;
    padding-left: 35px;
    padding-right: 35px;
    }

    @media (max-width: 575.98px) {
    .section .section-title {
        font-size: 14px;
    }
    .section .section-header {
        flex-wrap: wrap;
        margin-bottom: 20px !important;
    }
    .section .section-header h1 {
        font-size: 18px;
    }
    .section .section-header .float-right {
        display: inline-block;
        width: 100%;
        margin-top: 15px;
    }
    .section .section-header .section-header-breadcrumb {
        flex-basis: 100%;
        margin-top: 10px;
    }
    }
    /* 4.3 Page */
    .page-error {
    height: 100%;
    width: 100%;
    padding-top: 60px;
    text-align: center;
    display: table;
    }
    .page-error .page-inner {
    display: table-cell;
    width: 100%;
    vertical-align: middle;
    }
    .page-error h1 {
    font-size: 10em;
    font-weight: 700;
    }
    .page-error .page-description {
    font-size: 18px;
    font-weight: 400;
    color: #34395e;
    }
    .page-error .page-search {
    margin: 40px auto;
    max-width: 100%;
    width: 350px;
    }
    .page-error .page-search .form-control {
    border-radius: 30px;
    }
    .page-error .page-search .btn {
    border-radius: 30px;
    margin-left: 10px;
    }

    @media (max-width: 575.98px) {
    .page-error .page-search {
        width: 100%;
    }
    }
    /* 4.4 Layout */
    .main-sidebar {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    position: fixed;
    top: 0;
    height: 100%;
    width: 250px;
    background-color: #fff;
    z-index: 880;
    left: 0;
    }

    .main-sidebar,
    .navbar,
    .main-content,
    .main-footer {
    transition: all 0.5s;
    }

    body.sidebar-gone .main-sidebar {
    left: -250px;
    }

    body.sidebar-mini .hide-sidebar-mini {
    display: none !important;
    }
    body.sidebar-mini .main-sidebar {
    width: 65px;
    overflow: initial !important;
    position: absolute;
    box-shadow: none;
    }
    body.sidebar-mini .main-sidebar:after {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    content: " ";
    position: fixed;
    background-color: #fff;
    width: 65px;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -1;
    opacity: 0;
    -webkit-animation-name: mini-sidebar;
            animation-name: mini-sidebar;
    -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
    -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
    }
    @-webkit-keyframes mini-sidebar {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
    }
    @keyframes mini-sidebar {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
    }
    body.sidebar-mini .main-sidebar .sidebar-brand {
    display: none;
    }
    body.sidebar-mini .main-sidebar .sidebar-brand-sm {
    display: block;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li {
    padding: 10px;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li.menu-header {
    padding: 0;
    font-size: 0;
    height: 2px;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li > a {
    border-radius: 3px;
    height: 45px;
    padding: 0;
    justify-content: center;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li > a .ion, body.sidebar-mini .main-sidebar .sidebar-menu > li > a .fas, body.sidebar-mini .main-sidebar .sidebar-menu > li > a .far, body.sidebar-mini .main-sidebar .sidebar-menu > li > a .fab, body.sidebar-mini .main-sidebar .sidebar-menu > li > a .fal {
    margin: 0;
    font-size: 20px;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li > a span {
    display: none;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li > a .badge {
    padding: 5px;
    position: absolute;
    top: 4px;
    right: 4px;
    font-size: 10px;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li > a.has-dropdown:after {
    content: initial;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li.active > a {
    box-shadow: 0 4px 8px #acb5f6;
    background-color: #6777ef;
    color: #fff;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu {
    position: absolute;
    background-color: #fff;
    left: 65px;
    top: 10px;
    width: 200px;
    display: none;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.03);
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li > a:focus,
    body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li.active > a,
    body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li.active > a:hover {
    color: #fff;
    background-color: #6777ef !important;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li a {
    height: 40px;
    padding: 0 20px;
    background-color: #fff;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li a.has-dropdown:after {
    content: "\f054";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translate(0, -50%);
    font-size: 12px;
    transition: all 0.5s;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu li:hover > ul.dropdown-menu {
    display: block !important;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu li:hover > ul.dropdown-menu li:hover > a {
    background-color: #fcfcfd;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu li:hover > ul.dropdown-menu li .dropdown-menu {
    left: 200px;
    padding: 0;
    }
    body.sidebar-mini .navbar {
    left: 65px;
    }
    body.sidebar-mini .main-content, body.sidebar-mini .main-footer {
    padding-left: 90px;
    }

    body.layout-2 .navbar-bg {
    z-index: 889;
    height: 70px;
    }
    body.layout-2 .navbar {
    left: 0;
    z-index: 890;
    }
    body.layout-2 .main-wrapper {
    display: flex;
    flex-wrap: wrap;
    padding: 0 50px;
    }
    body.layout-2 .main-sidebar,
    body.layout-2 .main-content,
    body.layout-2 .main-footer {
    flex-shrink: 0;
    flex-grow: 0;
    }
    body.layout-2 .main-sidebar {
    background-color: transparent;
    box-shadow: none;
    position: static;
    margin-top: 100px;
    width: 200px;
    }
    body.layout-2 .main-sidebar .sidebar-menu li.menu-header {
    padding: 0;
    }
    body.layout-2 .main-sidebar .sidebar-menu li a {
    padding: 0;
    }
    body.layout-2 .main-sidebar .sidebar-menu li a i {
    width: 10px;
    }
    body.layout-2 .main-sidebar .sidebar-menu li a.has-dropdown:after {
    right: 0;
    }
    body.layout-2 .main-sidebar .sidebar-menu li a:hover {
    color: #6777ef;
    background-color: transparent;
    }
    body.layout-2 .main-sidebar .sidebar-menu li ul.dropdown-menu li a {
    padding-left: 34px;
    }
    body.layout-2 .main-sidebar .sidebar-menu li.active a {
    background-color: transparent;
    }
    body.layout-2 .main-sidebar .sidebar-menu li.active ul.dropdown-menu {
    background-color: transparent;
    }
    body.layout-2 .main-sidebar .sidebar-menu li.active ul.dropdown-menu a {
    background-color: transparent;
    }
    body.layout-2 .main-content {
    padding-top: 107px;
    padding-left: 30px;
    padding-right: 0;
    width: calc(100% - 200px);
    }
    body.layout-2 .main-footer {
    margin-left: 230px;
    width: calc(100% - 230px);
    padding-left: 0;
    padding-right: 0;
    }

    body.layout-3 .navbar {
    left: 0;
    right: 0;
    }
    body.layout-3 .navbar.navbar-secondary {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
    background-color: #fff;
    top: 70px;
    padding: 0;
    z-index: 889;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item.active > .nav-link {
    color: #6777ef;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item.active > .nav-link:before {
    left: 35px;
    right: 0;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item:first-child .nav-link {
    margin-left: 0;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item:last-child .nav-link {
    margin-right: 0;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link {
    color: #868e96;
    font-size: 13px;
    letter-spacing: 0.3px;
    height: 70px;
    padding: 0;
    padding-left: 0 !important;
    padding-right: 0 !important;
    margin-left: 15px;
    margin-right: 15px;
    position: relative;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link.has-dropdown {
    margin-right: 35px;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link.has-dropdown:after {
    content: "\f054";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translate(0, -50%);
    font-size: 12px;
    transition: all 0.5s;
    right: -20px;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link:before {
    content: " ";
    position: absolute;
    left: initial;
    right: initial;
    bottom: 0;
    height: 2px;
    background-color: #6777ef;
    transition: all 0.5s;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link span {
    line-height: 74px;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link i {
    width: 30px;
    font-size: 16px;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link:hover {
    color: #191d21 !important;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu {
    padding: 0;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item .nav-link {
    color: #6c757d;
    font-weight: 600;
    letter-spacing: 0.3px;
    padding: 7px !important;
    padding-left: 20px !important;
    padding-right: 20px !important;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item .nav-link.has-dropdown:after {
    content: "\f054";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translate(0, -50%);
    font-size: 12px;
    transition: all 0.5s;
    right: 15px;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item:hover > .nav-link {
    background-color: #fcfcfd;
    color: #191d21;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item:hover > .dropdown-menu {
    display: block !important;
    top: -5px;
    left: 200px;
    }
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item.active > .nav-link,
    body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item .nav-link:focus {
    background-color: #6777ef;
    color: #fff;
    }
    body.layout-3 .main-content {
    padding-left: 0;
    padding-right: 0;
    padding-top: 170px;
    }
    body.layout-3 .main-footer {
    padding-left: 0;
    padding-right: 0;
    }

    .main-sidebar .sidebar-brand {
    display: inline-block;
    width: 100%;
    text-align: center;
    height: 60px;
    line-height: 60px;
    }
    .main-sidebar .sidebar-brand.sidebar-brand-sm {
    display: none;
    }
    .main-sidebar .sidebar-brand a {
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 700;
    color: #000;
    }
    .main-sidebar .sidebar-user {
    display: inline-block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    }
    .main-sidebar .sidebar-user .sidebar-user-picture {
    float: left;
    margin-right: 10px;
    }
    .main-sidebar .sidebar-user .sidebar-user-picture img {
    width: 50px;
    border-radius: 50%;
    }
    .main-sidebar .sidebar-menu {
    padding: 0;
    margin: 0;
    }
    .main-sidebar .sidebar-menu li {
    display: block;
    }
    .main-sidebar .sidebar-menu li.menu-header {
    padding: 3px 15px;
    color: #a1a8ae;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    font-weight: 600;
    }
    .main-sidebar .sidebar-menu li.menu-header:not(:first-child) {
    margin-top: 10px;
    }
    .main-sidebar .sidebar-menu li a {
    position: relative;
    display: flex;
    align-items: center;
    height: 50px;
    padding: 0 20px;
    width: 100%;
    letter-spacing: 0.3px;
    color: #78828a;
    text-decoration: none;
    }
    .main-sidebar .sidebar-menu li a .badge {
    float: right;
    padding: 5px 10px;
    margin-top: 2px;
    }
    .main-sidebar .sidebar-menu li a i {
    width: 28px;
    margin-right: 20px;
    text-align: center;
    }
    .main-sidebar .sidebar-menu li a span {
    margin-top: 3px;
    width: 100%;
    }
    .main-sidebar .sidebar-menu li a:hover {
    background-color: #f8fafb;
    }
    .main-sidebar .sidebar-menu li.active a {
    color: #6777ef;
    font-weight: 600;
    background-color: #f8fafb;
    }
    .main-sidebar .sidebar-menu li.active a.has-dropdown:after {
    transform: translate(0, -50%) rotate(90deg);
    }
    .main-sidebar .sidebar-menu li.active ul.dropdown-menu {
    background-color: #f8fafb;
    }
    .main-sidebar .sidebar-menu li a.has-dropdown:after {
    content: "\f054";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translate(0, -50%);
    font-size: 12px;
    transition: all 0.5s;
    }
    .main-sidebar .sidebar-menu li.active > ul.dropdown-menu li a:hover {
    background-color: #f8fafb;
    }
    .main-sidebar .sidebar-menu li ul.dropdown-menu {
    padding: 0;
    margin: 0;
    display: none;
    position: static;
    float: none;
    width: 100%;
    box-shadow: none;
    background-color: transparent;
    }
    .main-sidebar .sidebar-menu li ul.dropdown-menu li a {
    color: #868e96;
    height: 35px;
    padding-left: 65px;
    font-weight: 400;
    }
    .main-sidebar .sidebar-menu li ul.dropdown-menu li a:hover {
    color: #6777ef;
    background-color: inherit;
    }
    .main-sidebar .sidebar-menu li ul.dropdown-menu li.active > a {
    color: #6777ef;
    font-weight: 600;
    }
    .main-sidebar .sidebar-menu li ul.dropdown-menu li a i {
    margin-top: 1px;
    text-align: center;
    }
    .main-sidebar .sidebar-menu li ul.dropdown-menu li ul.dropdown-menu {
    padding-left: 10px;
    }

    .main-content {
    padding-left: 280px;
    padding-right: 30px;
    padding-top: 80px;
    width: 100%;
    position: relative;
    }

    .main-footer {
    padding: 20px 30px 20px 280px;
    margin-top: 40px;
    color: #98a6ad;
    border-top: 1px solid #e3eaef;
    display: inline-block;
    width: 100%;
    }
    .main-footer .footer-left {
    float: left;
    }
    .main-footer .footer-right {
    float: right;
    }

    .simple-footer {
    text-align: center;
    margin-top: 40px;
    margin-bottom: 40px;
    }

    body:not(.sidebar-mini) .sidebar-style-1 .sidebar-menu li.active a {
    background-color: #6777ef;
    color: #fff;
    }
    body:not(.sidebar-mini) .sidebar-style-1 .sidebar-menu li.active ul.dropdown-menu li a {
    color: #e8ebfd;
    }
    body:not(.sidebar-mini) .sidebar-style-1 .sidebar-menu li.active ul.dropdown-menu li a:hover {
    background-color: #6777ef;
    color: #fff;
    }
    body:not(.sidebar-mini) .sidebar-style-1 .sidebar-menu li.active ul.dropdown-menu li.active a {
    color: #fff;
    }

    body:not(.sidebar-mini) .sidebar-style-2 .sidebar-menu > li.active > a {
    padding-left: 16px;
    background-color: transparent;
    position: relative;
    }
    body:not(.sidebar-mini) .sidebar-style-2 .sidebar-menu > li.active > a:before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 25px;
    width: 4px;
    background-color: #6777ef;
    }
    body:not(.sidebar-mini) .sidebar-style-2 .sidebar-menu li.active ul.dropdown-menu li a {
    padding-left: 61px;
    background-color: #fff;
    }

    @media (max-width: 1024px) {
    .sidebar-gone-hide {
        display: none !important;
    }
    .sidebar-gone-show {
        display: block !important;
    }
    .main-sidebar {
        position: fixed !important;
        margin-top: 0 !important;
        z-index: 891;
    }
    body.layout-2 .main-wrapper,
    body.layout-3 .main-wrapper {
        width: 100%;
        padding: 0;
        display: block;
    }
    .main-content {
        padding-left: 30px;
        padding-right: 30px;
        width: 100% !important;
    }
    .main-footer {
        padding-left: 30px;
    }
    body.search-show {
        overflow: hidden;
    }
    body.search-show .navbar {
        z-index: 892;
    }
    body.sidebar-show {
        overflow: hidden;
    }
    body.search-show:before, body.sidebar-show:before {
        content: "";
        position: fixed;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: 0;
        z-index: 891;
        -webkit-animation-name: fadeinbackdrop;
        animation-name: fadeinbackdrop;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    @-webkit-keyframes fadeinbackdrop {
        to {
        opacity: 0.6;
        }
    }
    @keyframes fadeinbackdrop {
        to {
        opacity: 0.6;
        }
    }
    }
    /* 4.5 Animation */
    .pulsate {
    -webkit-animation: pulsate 1s ease-out;
            animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    opacity: 1;
    }

    @-webkit-keyframes pulsate {
    0% {
        -webkit-transform: scale(0.1, 0.1);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        -webkit-transform: scale(1.2, 1.2);
        opacity: 0;
    }
    }
  </style>

  <!-- CSS Tambahan -->
  @yield('head')
</head>

<body class="sidebar-mini">
<div id="app">
    <div class="main-wrapper">
      <!-- Main Content -->
      <div class="main-content" style="padding: 15px 30px 0px 80px;">
      <section class="section">
          <div class="row">
            @foreach($datas as $data)
            <div class="card" style="height: 250px; width: 250px; margin: 5px; border: 1px solid #000;">
                <div class="row" style="margin: 5px;">
                    <div class="card-header">
                        <h6 style="color:#262626">Akun Pemilih {{ $data->instansi }}</h6>
                    </div>
                    <div class="card-body mb-0" style="margin-bottom: 0;">
                        <div class="form-group mb-0" style="margin-bottom: 0;">
                            <label>Nama Lengkap</label>
                            <label><b>{{ \Illuminate\Support\Str::limit($data->name, 20, '...') }}</b></label>
                        </div>
                        <div class="form-group mb-0" style="margin-bottom: 0;">
                            <label>Username: </label>
                            <label>{{ $data->username }}</label>
                        </div>
                        <div class="form-group mb-0" style="margin-bottom: 0;">
                            <label>Password: </label>
                            <label>{{ $data->password }}</label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
        </section>
      </div>
    </div>
  </div> -->
</body>
</html>