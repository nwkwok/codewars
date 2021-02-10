<?php
function drawSpiral()
{
    $a = [0, 0];
    $b = [0, 0];

    $draw = true;
    $i = 1;

    while ($draw) {
        // up
        $a = $b;
        $b = [$a[0], $a[1] + $i];
        drawLine($a, $b);

        // right
        $a = $b;
        $b = [$a[0] + $i, $a[1]];
        drawLine($a, $b);                # $a=0,0 $b=(0,1)

        // increment
        $i++;

        // down
        $a = $b;
        $b = [$a[0], $a[1] - $i];
        drawLine($a, $b);                # $a=0,0 $b=(0,1)

        // left
        $a = $b;
        $b = [$a[0] - $i, $a[1]];
        drawLine($a, $b);                # $a=0,0 $b=(0,1)

        $i++;
    }

    //   drawLine($a, $b);					# $a=0,0 $b=(0,1) => len=1
    //   drawLine($a++, $b--);				# $a=0,1 $b=(1,1) => len=1
    //   drawLine($a--, $b-=2);			    # $a=1,1 $b=(1,-1) => len=2
    //   drawLine($a-=2, $b+=2);			# $a=1,-1 $b=(-1,-1) => len=2
    //   drawLine($a+=2, $b+=3);  			# $a=-1,-1 $b=(-1,2) => len=3
    //   drawLine((0,0), (0,1))

}

function drawLine($a, $b)
{
    // assume this is already defined
}

/*
// Circle one:
  	// function that resets my marker
        	// function that draws a circle
				
          a=1,1
          b=1,0
          1, -1
          0, -1
          -1, -1
          -1, 0
          -1, 1
          
// re-run reset marker function (with increment)
          -1, 2
          0, 2
          
          	// rerun the draw circle with increment
              1,1
              1,0
              1, -1
              0, -1
              -1, -1
              -1, 0
              -1, 1

*/

# Lessons Learned
    // Expect to feel uncomfortable as you're figuring it out 
    // If you spent half the time understanding the problem and half coding that's a great sign
    // If you worked this way in your normal job, that's a good sign
    // If you rush -- you can tell when the solution comes out
    // "I'm just gonna work out test cases until I see the pattern and understand the pattern."
    // Make enough test cases so that you can feel like you understand how you can solve it
    // Writing the test cases also help you to recognize the patterns
    // Distinguishing between numbers and patterns 
    // Try to get to the point to say, "That's the pattern - now I get it."
    // Write out your tests / thinking in a way that is meaningful 
    // Keep explaining the thought process
