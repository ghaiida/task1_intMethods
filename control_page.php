

<!DOCTYPE html>
<html>
<head>
	<title>control arm page</title>

	<style >

		body {
		   margin: 0;
		   background-color: #bfaf6b;
		}
		#topbar {
		   background-color: lightyellow;
           height: 100px;
           top:0;
           padding: 12px 80px;
		}

		h1{
			padding-left: 530px;
            font-size:35px;
		}
		table {
           border-collapse: collapse;
           width: 100%;
           margin-top: 100px;
        }
        td {
           padding: 8px;
           text-align: center;
           font-size:30px;
           border-style: none;
        }
        input {
        	width:30%;
        	outline: none;
        	box-shadow: 0px 1px 10px 1px gray;
        }

        input:hover{
        	opacity: 1px;
        }
}
	</style>

</head>

<body>
    <header id="topbar">
    	<h1> Robot Arm control </h1>
    </header>
    <form action="db.php" method="POST">
       <table>
    	<tr>
    		<td>
    			<div>
    				<span id="output1"></span>
                    <input type="range" id="m1" name="volume1" min="0" max="180">
                    <label for="volume">motor 1</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output2"></span>
                    <input type="range" id="m2" name="volume2" min="0" max="180">
                    <label for="volume">motor 2</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output3"></span>
                    <input type="range" id="m3" name="volume3" min="0" max="180">
                    <label for="volume">motor 3</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output4"></span>
                    <input type="range" id="m4" name="volume4" min="0" max="180">
                    <label for="volume4">motor 4</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output5"></span>
                    <input type="range" id="m5" name="volume5" min="0" max="180">
                    <label for="volume5">motor 5</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output6"></span>
                    <input type="range" id="m6" name="volume6" min="0" max="180">
                    <label for="volume6">motor 6</label>
                </div>
    		</td>
    	</tr>
    	
    	<tr>
    		<td>
    	      <button type="submit" name="submit">Save</button>
              <button type="submit">Run</button>
           </td>
      </tr>
    </table>
</form>
    

    <footer id="footer"></footer>
    
    <script src="Js.js" >
    
    </script>

</body>
</html>