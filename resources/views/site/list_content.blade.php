    <div class="container">

      <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-9">
              <h1>LIST!</h1>
                @if(isset($logs))
                  <table>
                    @foreach($logs as $log)
                      <tr>
                        <td style="border:1px solid black">
                          
                        {{ $log->id }}</td>
                        <td style="border:1px solid black">
                          {{ $log->task_id }}
                        </td>
                        <td style="border:1px solid black">{{ $log->created_at }}</td>
                      </tr>
                    @endforeach
                  </table>
                @endif
        </div>
        <div class="col-md-3">
          
        </div>
      </div>
      
    </div>