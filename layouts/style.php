<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .col-sm-3 {
    transition-duration: 0.5s;
  }

  .card {
    overflow: hidden;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
    transition-duration: 0.5s;
    background: no-repeat url(https://i.imgur.com/x5PnH9h.gif);
    background-size: auto 100%;
  }

  .card:hover {
    background-size: auto 130%;
  }

  .card:hover .content {
    transform: translateY(0);
    opacity: 0.8;
  }

  .content {
    opacity: 0.5;
    transition-duration: 0.5s;
    background: #000;
    height: 100%;
    width: 100%;
    transform: translateY(80%);
  }

  a {
    text-decoration: none;
  }
  input::placeholder {
    color: #aaa;
  }
</style>