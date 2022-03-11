<head>
    <style>
    body {
      font-family: Arial;
      font-size: 15px;
      padding: 2px;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .row {
      /*display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    
    .col-25 {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
    }
    
    .col-50 {
      -ms-flex: 50%; /* IE10 */
      flex: 50%;
    }
    
    .col-75 {
      -ms-flex: 75%; /* IE10 */
      flex: 75%;
    }
    
    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }
    
    .container {
      background-color:cadetblue;
      padding: 5px 10px 10px 15px;
      border: 5px solid black;
      border-radius: 3px;
    }
    
    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid black;
      border-radius: 3px;
    }
    
    label {
      margin-bottom: 10px;
      display: block;
    }
    
    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }
    
    .btn {
      background-color: #04AA6D;
      color: black;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }
    
    .btn:hover {
      background-color: blue;
    }
    
    a {
      color: #2196F3;
    }
    
    hr {
      border: 1px solid black;
    }
    
    span.price {
      float: right;
      color: black;
    }
    
    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 600px) {
      .row {
        flex-direction: column-reverse;
      }
      .col-25 {
        margin-bottom: 20px;
      }
    }
    </style>
    </head>