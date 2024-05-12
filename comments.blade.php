<style>
    .wrapper {
        background-color:rgb(180, 249, 249);
        padding: 2rem;
        width: 300px;
        max-height: 700px !important;
        overflow-y: auto !important;
        
        border-radius: .75rem;
        box-shadow:coral;
        text-align: center;
    }

    .fondo_chat::-webkit-scrollbar{
        width: 14px;
        color:black;



    }

    


    .wrapper h3 {
        margin-left: -10px;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    label{

        margin-right:150px;

    }
    
    .fondo_chat{
    width: 200px;
    height: 100px;
    background-color:rgb(255, 255, 255);
    padding:10px;
    border-radius: 20px;
    margin-top: 20px;
    margin-left: 15px;
    

    }

    textarea {
        display: block;
        width: 200px;
        height: -100%;
        background-color: rgb(255, 255, 255);
        padding: 1rem;
        border-radius: .5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: .5rem;
        margin-left: 15px;
    }
    .btn-group {
        margin-left: 40px;
        display: flex;
        grid-gap: .5rem;
        align-items: center;
        
    }
    .btn-group .btn {
        margin-left: 70px;
        border-radius: .5rem;
       
        cursor: pointer;
        font-size: .875rem;
        font-weight: 500;
        
        
    }
    
    .btn-group .btn.submit:hover {
        background-color:rgb(154, 154, 233);
    }

    .btn-group .btn.cancel:hover {
        background-color: brown;
    }
    
    
    
    </style>
    
    
    
    
    
    <div class="wrapper">
        <h3>Comentarios</h3>

            

        <form action="#">
            
                
            {{--listado de comentarios del usuario --}}
    
            <div class="fondo_chat">
                <p>comentario</p>
                <p>comentario</p>
                <p>comentario</p>
                <p>comentario</p>
                <p>comentario</p>
            </div>

            

            



            
             {{-- Caja para enviar comentarios--}}
            <label for="">Usuario</label>
            <textarea name="opinion" cols="15" rows="-5" placeholder="Su opinion"></textarea>
            <div class="btn-group">
                <button type="submit" class="btn submit">Enviar</button>
                <button class="btn cancel">Cancel</button>
            </div>


            
        </form>

        
    </div>
    
   