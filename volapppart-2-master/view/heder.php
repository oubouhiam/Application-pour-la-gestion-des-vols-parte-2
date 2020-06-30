<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Fly emarates</title>




	<link type="text/css" rel="stylesheet" href="../public/css/style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
input[type="text"]:focus {
    border:1px solid #a832a6 !important;
    box-shadow: 0 4px 8px 0 #a832a6, 0 6px 20px 0 #f55ff2;
    outline: none !important;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  border-radius: 5px;
  margin : 1%;
}
.cards_container{
	display: flex;
  flex-wrap: wrap;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5);
}

.image {
  /* border-radius: 5px 5px 0 0; */
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.container {
  padding: 2px 16px;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.card:hover .image {
  opacity: 0.3;
}

.card:hover .middle {
  opacity: 1;
}
.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>

	


</head>