function SpeechRecog() {
    var output = document.getElementById("message-input");
    var action = document.getElementById("action");
            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            var recognition = new SpeechRecognition();
        
            // This runs when the speech recognition service starts
            recognition.onstart = function() {
                action.innerHTML = "<small>listening, please speak...</small>";
            };
            
            recognition.onspeechend = function() {
                action.innerHTML = "<small>stopped listening, hope you are done...</small>";
                recognition.stop();
                
            }
          
            // This runs when the speech recognition service returns result
            recognition.onresult = function(event) {
                var transcript = event.results[0][0].transcript;
                var confidence = event.results[0][0].confidence;
                output.value=transcript;
                
            };
                      
             // start recognition
             recognition.start();
    }