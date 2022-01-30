
  
  let ks_hr = {{ ks_here }};
      
  let ks_idx = {{ ks_what }};
  
    
  let prices = [[0, 14998], [14999, 24998], [24800, 34998],  [34999, 44998], [44999, 60100], [60101, 10000000]]; 
  let ks_prices = [275, 375, 475, 575, 799, 999];
  let ks_ids = [6734158200968, 6736637198472, 6734159052936, 6734160298120, 5115093221512, 5115091779720];
  
  
  if (ks_hr == true ){
    let running_sum = {{ cart.total_price }} - ks_prices[ks_idx];
    if(ks_prices[ks_idx][0] <= running_sum && running_sum <= ks_prices[ks_idx][1]){
    
      

    } else {
    
          
    	jQuery.post('/cart/add.js', {
    		items: [{
            	id: ks_ids[ks_what],
    	    	quantity: 1
    		}]
    	});
          
  		ks_hr = false;  
    }
    
  }
  

  
  let sum = {{cart.total_price}};
      
        jQuery.post('/cart/add.js', {
    		items: [{
            	id: 6629782519944,
    	    	quantity: 1
    		}]
    	});
  
  
	if(sum >= 0 && sum <= 14998 && ks_hr == false){
  
    	jQuery.post('/cart/add.js', {
    		items: [{
            	id: 6734158200968,
    	    	quantity: 1
    		}]
    	});
    
    
	} else if( sum >= 14999 && sum <=24998 && ks_hr == false ){
		
        	jQuery.post('/cart/add.js', {
    		items: [{
            	id: 6736637198472,
    	    	quantity: 1
    		}]
    	});
	} else if( sum >= 24800 && sum <=34998 && ks_hr == false ){
		
        	jQuery.post('/cart/add.js', {
    		items: [{
            	id: 6734159052936,
    	    	quantity: 1
    		}]
    	}); 
	} else if( sum >= 34999 && sum <=44998 && ks_hr == false ){
		
        	jQuery.post('/cart/add.js', {
    		items: [{
            	id: 6734160298120,
    	    	quantity: 1
    		}]
    	});
	} else if( sum >= 44999 && sum <= 60100 && ks_hr == false ){
		
        	jQuery.post('/cart/add.js', {
    		items: [{
            	id: 5115093221512,
    	    	quantity: 1
    		}]
    	});
      
	} else{
		
        	jQuery.post('/cart/add.js', {
    		items: [{
            	id: 5115091779720,
    	    	quantity: 1
    		}]
    	});
    }
      
      
    
      
