<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel='shortcut icon' href='/jaipun.ico' type='image/x-icon'>     
<html lang="en">
<head>
<title><?php echo $join->join ?>  by  <?php echo $join->user->name ?></title>
</head>
<body class="" style="
    margin: 0px;
    background: #fafafa;
">
    <div style="
    max-width: 620px;
    margin-left: auto;
    margin-right: auto;
    background: #fff;
">
        <img src="<?php echo $join->joinPhoto ?>" alt="W3Schools.com" style="
    width: 100%;
">
 <div style="
    margin-left: 15px;
    margin-top: 15px;
    margin-bottom: 15px;
">
    <div style="
    font-size: 20px;
    font-weight: bold;
"><?php echo $join->join ?></div><div style="
    color: #888;
"><?php echo $join->joinLocation ?></div><div style="
    color: #999;
    font-size: 14px;
">ดูแผนที่</div><p></p>

<div style=""><img src="<?php echo $join->user->profile ?>" alt="W3Schools.com" style="
    width: 35px;
    border-radius: 100px;
    ">
    <div style="
    display: inline-block;
    margin-left: 10px;
">
    

<div style="
    font-size: 18px;
    font-weight: bold;
"><?php echo $join->user->name ?></div><div style="
    color: #777;
    margin-top: 4px;
"><?php echo $join->user->account ?></div>

        
</div>
</div>
    </div>
    
    <div style="
    padding-left: 15px;
    padding-top: 15px;
    background: #fcffff;
    padding-bottom: 15px;
">
            <div style="
    font-size: 20px;
">คุณมาที่นี่เพราะอะไร</div>

@foreach($stays as $stays)

    <img src="<?php echo $stays->user->profile ?>" alt="W3Schools.com" style="
    width: 40px;
    border-radius: 100px;
    border: 2px solid #70D2C7;
    ">
    
@endforeach

    
        </div>

<div>



@foreach($posts as $posts)
<div style="
    padding: 15px;
    border-bottom: 1px solid #eee;
">

    <img src="<?php echo $posts->user->profile ?>" alt="W3Schools.com" style="
    width: 40px;
    border-radius: 100px;
    margin-bottom: 10px;
    ">
    <div style="
        display: inline-block;
        margin-left: 10px;
    ">
            
        <div style="
            font-size: 16px;
            font-weight: bold;
        "><?php echo $posts->user->name ?>
        <div style="
            color: #777;
            margin-top: 4px;
            font-size: 12px;
            display: inline;
        ">  <?php echo $posts->user->account ?></div>

        </div>
    
        <div style="font-size: 12p;"><?php echo $posts->post ?></div>
        <div style="
            font-size: 12px;
            color: #999;
        "><?php echo $posts->created_at ?>
        </div>

    </div>

</div>


@endforeach




        




</div></div>
    
</body></html>