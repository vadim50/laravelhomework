    <div class="container">

      <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-9">
              <h1>Hello, world!</h1>
                @if(isset($tasks))
                  <table>
                    @foreach($tasks as $task)
                      <tr>
                        <td>{{ $task->id }}</td>
                        <td>
                          <a class="btn btn-success" href="{{ route('raund',['id'=>$task->id]) }}">
                            {{ $task->name }}
                          </a>
                        </td>
                        <td>{{ $task->counter }}</td>
                      </tr>
                    @endforeach
                  </table>
                @endif
                <br>
                <p><a class="btn btn-danger" href="{{ route('list') }}">list</a></p>
                <br>
                <br>
                <br>

              <p>Last||{{ $last->id }} || {{ $last->task_id }}||{{ $last->created_at }}</p>
              <p><a class="btn btn-success" href="{{ route('work',['i'=>$last->id]) }}" title="">Взять в работу</a></p>
        </div>
        <div class="col-md-3">
          
        </div>
      </div>
      
    </div>