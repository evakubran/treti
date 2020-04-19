<?php
    if(!isset($_SESSION['user'])){
    	header("location: login");
    	exit();
    }else{
	echo "Prihlasen: ";
	echo $_SESSION['user'];
        echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis aliquam dolor, vel dignissim ligula rhoncus vel. Nullam tempor, libero a ullamcorper semper, sapien felis ullamcorper odio, pharetra porta nibh sem eu nisl. Duis fermentum rhoncus ante, quis consectetur erat pretium non. Morbi ac rhoncus sem, id rhoncus mi. Maecenas sagittis consectetur nibh, iaculis scelerisque eros. Phasellus vitae ultrices mauris, et ultricies sem. Nunc pretium sem ac purus consequat, et dignissim orci commodo. Curabitur cursus elementum ante. Fusce nunc odio, suscipit eu blandit a, bibendum sit amet mi. Maecenas finibus tincidunt finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam egestas tortor nec libero tincidunt rhoncus.";
        echo "<a href='logout'>Logout</a>";
    }
?>



