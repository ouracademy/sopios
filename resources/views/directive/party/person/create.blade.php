@extends('directive.layout')
@section('content')

@include('directive.event.fragments.modalExpositor')

<form class="form-horizontal" th:object="${registerPersonInput}"
      th:action="@{/person/store}" method="post">


    <div class="row" id="personForm">

        <div th:include="directive/party/fragments/personForm"
             th:remove="tag"></div>


    </div>
    <div class="row" id="personHistoryForm">
        <div th:include="directive/party/fragments/personHistoryForm "
             th:remove="tag"></div>

    </div>
    <button type="submit" class="btn btn-default">Registrar</button>

</form>

@endsection
@section('scripts')
<script>
    $(document).ready(function () {



        var cnt = 1;
        $("#addRow").click(function () {
            $('#tableAcademicHistory  tr').last().after(
                    '<tr>' +
                    +
                    '<td><input type="text" class="form-control" name="data[' + cnt + ']" value="f"/></td>' +
                    '<td><input type="text" class="form-control"  /></td>' +
                    '<td><input type="text" class="form-control"   /></td>' +
                    '</tr>');
            cnt++;


        });

        $('#birthDate').datepicker({
            format: 'dd/mm/yyyy'
        });





    });
</script>
@endsection



