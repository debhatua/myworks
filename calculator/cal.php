<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Courier New", Courier, monospace;
          }
          body {
            display: flex;
            width: 100vw;
            height: 100vh;
            align-items: center;
            justify-content: center;
            
            
          }
          .container {
            position: relative;
            min-width: 400px;
            min-height: 300px;
             padding: 40px 30px 30px;
            border-radius: 20px;
            border: 2px solid black;
            background-color: gold;
          }
          .container span {
            color: #fff;
            position: relative;
            display: grid;
            width: 80px;
            place-items: center;
            margin: 8px;
            height: 80px;
            background: linear-gradient(180deg, #2f2f2f, #3f3f3f);
            box-shadow: inset -8px 0 8px rgba(0, 0, 0, 0.15),
              inset 0 -8px 8px rgba(0, 0, 0, 0.25), 0 0 0 2px rgba(0, 0, 0, 0.75),
              10px 20px 25px rgba(0, 0, 0, 0.4);
            user-select: none;
            cursor: pointer;
            font-weight: 400;
            border-radius: 10px;
          }
          .calculator span:active {
            filter: brightness(1.5);
          }
          .calculator span::before {
            content: "";
            position: absolute;
            top: 3px;
            left: 4px;
            bottom: 14px;
            right: 12px;
            border-radius: 10px;
            background: linear-gradient(90deg, #2d2d2d, #4d4d4d);
            box-shadow: -5px -5px 15px rgba(0, 0, 0, 0.1),
              10px 5px 10px rgba(0, 0, 0, 0.15);
            border-left: 1px solid #0004;
            border-bottom: 1px solid #0004;
            border-top: 1px solid #0009;
          }
          .calculator span i {
            position: relative;
            font-style: normal;
            font-size: 1.5em;
            text-transform: uppercase;
          }
          .calculator {
            position: relative;
            display: grid;
          }
          .calculator .value {
            position: relative;
            grid-column: span 4;
            height: 100px;
            width: calc(100% - 25px);
            left: 10px;
            border: none;
            outline: none;
            background-color: #a7af7c;
            margin-bottom: 10px;
            border-radius: 10px;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.75);
            text-align: right;
            padding: 10px;
            font-size: 2em;
          }
          .calculator .clear {
            grid-column: span 2;
            width: 180px;
            background: #f00;
          }
          @media screen and (max-width: 700px){
            .calculator .clear{
              grid-column: span 1;
             width: 15vw;
            background: #f00;
            }
            .calculator .num{
              width: 18vw;
            }
            .container {
            position: relative;
            max-width: 95vw;
            max-height: 98vh;
            padding: 15vw 5vw 10vw;
            border: 2px solid black;
            background-color: gold;
          }
        }
            @media screen and (max-width: 400px && max-height: 800px){
              .container{
                position: relative;
              max-width: 95vw;
             max-height: 98vh;
              padding: 15vw 5vw 10vw;
             border: 8px solid black;
              background-color: gold;

              }
            }
         
          .calculator .clear::before {
            background: linear-gradient(90deg, #d20000, #ffffff5c);
            border-left: 1px solid #fff4;
            border-bottom: 1px solid #fff4;
            border-top: 1px solid #fff4;
          }
          .calculator .plus {
            grid-row: span 2;
            height: 180px;
          }
          .calculator .equal {
            background: #2196f3;
          }
          .calculator .equal::before{
            background: linear-gradient(90deg, #1479c9, #ffffff5c);
            border-left: 1px solid #fff4;
            border-bottom: 1px solid #fff4;
            border-top: 1px solid #fff4;
          }
    </style>
</head>
<body>
<div class="container">
      <form action="" name="calc" class="calculator">
        <input type="text" class="value" readonly name="txt" />
        <span class="num clear" onclick="calc.txt.value=''"><i>C</i></span>
        <span class="num" onclick="calc.txt.value+='/'"><i>/</i></span>
        <span class="num" onclick="calc.txt.value+='*'"><i>*</i></span>
        <span class="num" onclick="calc.txt.value+='7'"><i>7</i></span>
        <span class="num" onclick="calc.txt.value+='8'"><i>8</i></span>
        <span class="num" onclick="calc.txt.value+='9'"><i>9</i></span>
        <span class="num" onclick="calc.txt.value+='-'"><i>-</i></span>
        <span class="num" onclick="calc.txt.value+='4'"><i>4</i></span>
        <span class="num" onclick="calc.txt.value+='5'"><i>5</i></span>
        <span class="num" onclick="calc.txt.value+='6'"><i>6</i></span>
        <span class="num plus" onclick="calc.txt.value+='+'"><i>+</i></span>
        <span class="num" onclick="calc.txt.value+='1'"><i>1</i></span>
        <span class="num" onclick="calc.txt.value+='2'"><i>2</i></span>
        <span class="num" onclick="calc.txt.value+='3'"><i>3</i></span>
        <span class="num" onclick="calc.txt.value+='0'"><i>0</i></span>
        <span class="num" onclick="calc.txt.value+='00'"><i>00</i></span>
        <span class="num" onclick="calc.txt.value+='.'"><i>.</i></span>

        <span
          class="num equal"
          onclick="document.calc.txt.value=eval(calc.txt.value)"
          ><i>=</i></span
        >
      </form>
    </div>
        

</body>
</html>
