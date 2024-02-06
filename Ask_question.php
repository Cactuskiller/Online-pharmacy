<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin add page </title>
  <link rel="stylesheet" href="style2.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">

</head>

<body style="margin:0;padding:0;">
<div class="style43">
  <div>
    <table class="style14">
      <tr>
        <td>
          <p>Add a new item</p>
        </td>
        <td><a href="index.php"><i class="fa-regular fa-right-from-bracket fa-fade fa-xl" style="color: #042c71;"></i></a></td>
      </tr>
    </table>
  </div>
  <br><br>
  <h2 class="style38">Most popular questions</h2>
  <br>
  <div class="style38">
        <button class="style39">Can I order prescription medications without a doctor's prescription?</button>
        <div class="style40">
            <p>A:No, in most cases, you cannot order prescription medications without a valid doctor's prescription. We require a prescription for all prescription medications to ensure your safety and compliance with regulatory requirements.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">How long does it typically take to receive my medication after placing an order?</button>
        <div class="style40">
          <p>A:The estimated delivery time depends on your location and the shipping method selected. Typically, standard shipping takes 2 business days, while expedited shipping may take 1 business days. You'll receive a more accurate estimate during the checkout process.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">What payment methods do you accept?</button>
        <div class="style40">
          <p>A:We accept various payment methods, including credit/debit cards (Visa, MasterCard, American Express), PayPal, and some other online payment options. You can choose your preferred method during the checkout process.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">Do you offer international shipping?</button>
        <div class="style40">
           <p>A:Yes, we offer international shipping to many countries. Please enter your shipping address during the checkout process to see if we can deliver to your location. Note that shipping fees and delivery times may vary for international orders.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">How can I transfer my prescription to your pharmacy?</button>
        <div class="style40">
           <p>A:Transferring your prescription to our pharmacy is easy. Simply provide us with your current pharmacy's contact information, and we will handle the transfer process for you. You may also ask your doctor to send the prescription directly to us</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">Is my personal and medical information secure on your website?</button>
        <div class="style40">
           <p>A:Yes, we take your privacy and security seriously. Our website uses advanced encryption technology to protect your personal and medical information. We adhere to strict privacy policies and regulations to ensure your data is safe.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">Do you offer price matching for medications?</button>
        <div class="style40">
            <p>A:Yes, we offer a price matching policy. If you find a lower price for the same medication at a competing pharmacy, please contact our customer support team with the details, and we'll do our best to match or beat that price.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">Can I set up automatic refills for my medications?</button>
        <div class="style40">
           <p>A:Yes, we offer automatic refill services for eligible medications. You can set up automatic refills during the checkout process or by logging into your account and selecting the medications you'd like to auto-refill.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">How can I contact your customer support team?</button>
        <div class="style40">
            <p>A:You can contact our customer support team by phone at 2340078, by email at QuickMeds@gamil.com, or through our website's live chat feature. Our customer support team is available 24/7 to assist you with any questions or concerns.</p>
        </div>
    </div>
    <div class="style38">
        <button class="style39">What is the process for returning or exchanging medications if I receive the wrong product or have other issues?</button>
        <div class="style40">
            <p>A:If you receive the wrong product or encounter any issues with your order, please contact our customer support team immediately. We have a return and exchange policy in place to address such situations. We'll guide you through the process to ensure your satisfaction.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">Can I track the status of my order online?</button>
        <div class="style40">
            <p>A:Yes, you can track the status of your order by logging into your account and accessing the 'Order Status' section. We provide real-time updates on the progress of your order, from processing to shipping.</p>
        </div>
    </div>

    <div class="style38">
        <button class="style39">What should I do if I experience side effects or have concerns about the medication I received?</button>
        <div class="style40">
            <p>A:f you experience any side effects or have concerns about the medication you received, please stop taking it immediately and consult your healthcare provider. Additionally, feel free to contact our customer support team for guidance and assistance.</p>
        </div>
    </div>
    
    <script>
        var button = document.getElementsByClassName("style39");
        var i;
        for(i = 0; 1 < button.length; i++){
          button[i].addEventListener("click", function(){
                this.classList.toggle("style41");
                var nextEl = this.nextElementSibling;
                if(nextEl.style.maxHeight){
                  nextEl.style.maxHeight = null;
                }else{
                  nextEl.style.maxHeight = nextEl.scrollHeight + "px";
                }
            });
        }
    </script>
    </div>
</body>
</html>