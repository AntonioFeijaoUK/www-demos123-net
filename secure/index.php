<?php
        # Get the instance EC2-DOCUMENT from meta-data and store it in the $instance_id variable
        $url = "http://169.254.169.254/latest/dynamic/instance-identity/document";
        $instance_id = file_get_contents($url);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Demo on AWS Certificate Manager!</title>
  </head>
  <body>

<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Secure.demos123.net</h4>
              <p class="text-muted">Testing AWS Certificate Manager. AWS Certificate Manager is a service that lets you easily provision, manage, and deploy Secure Sockets Layer/Transport Layer Security (SSL/TLS) certificates for use with AWS services. SSL/TLS certificates are used to secure network communications and establish the identity of websites over the Internet. AWS Certificate Manager removes the time-consuming manual process of purchasing, uploading, and renewing SSL/TLS certificates. With AWS Certificate Manager, you can quickly request a certificate, deploy it on AWS resources such as Elastic Load Balancers, Amazon CloudFront distributions, and APIs on API Gateway, and let AWS Certificate Manager handle certificate renewals. SSL/TLS certificates provisioned through AWS Certificate Manager are free. You pay only for the AWS resources you create to run your application. <br> Click here for more details about <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/classic/elb-security-policy-table.html">Predefined SSL Security Policies for Classic Load Balancers</a>  .</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="https://feijaouk.com" target="_blank" class="text-white">Follow on Twitter</a></li>
                <li><a href="https://feijaouk.com" target="_blank" class="text-white">Like on Facebook</a></li>
                <li><a href="https://feijaouk.com" target="_blank" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="https://aws.amazon.com/certificate-manager/" target="_blank" class="navbar-brand d-flex align-items-center"><strong>Demo on AWS Certificate Manager</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>





 <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Demo on AWS Certificate Manager</h1>
          <p class="lead text-muted">Testing AWS Certificate Manager. AWS Certificate Manager is a service that lets you easily provision, manage, and deploy Secure Sockets Layer/Transport Layer Security (SSL/TLS) certificates for use with AWS services. SSL/TLS certificates are used to secure network communications and establish the identity of websites over the Internet. AWS Certificate Manager removes the time-consuming manual process of purchasing, uploading, and renewing SSL/TLS certificates. With AWS Certificate Manager, you can quickly request a certificate, deploy it on AWS resources such as Elastic Load Balancers, Amazon CloudFront distributions, and APIs on API Gateway, and let AWS Certificate Manager handle certificate renewals. SSL/TLS certificates provisioned through AWS Certificate Manager are free. You pay only for the AWS resources you create to run your application.</p>
          <p>
            <a href="https://aws.amazon.com/certificate-manager/pricing/" targe="_blank" class="btn btn-primary my-2">Pricing</a>
            <a href="https://aws.amazon.com/certificate-manager/faqs/" class="btn btn-secondary my-2">FAQs</a>
          </p>
        </div>
      </section>




  <div class="album py-5 bg-light">
    <div class="container">



       <h1>Demo on AWS Certificate Manager</h1>
       <p>Check certificate details on the webpage for more detail. </p>

           <div class="row">
            <div class="col-md-6">
              <div class="card mb-6 box-shadow">
            
                <div class="card-body">
                  <p class="card-text"><pre><?php echo " $instance_id "; ?></pre></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>

    </div> 
  </div>
</main>


<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>This website uses <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>.</p>
        <p>Want to learn more about AWS, visit <a href="https://aws.amazon.com/training/" target="_blank">https://aws.amazon.com/training/</a>.</p>
        <p>This page was build for demo and learning purposes by #Feijaouk <a href="https://feijaouk.com" target="_blank">FeijaoUK</a>.</p>
      </div>
</footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
