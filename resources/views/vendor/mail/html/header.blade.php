<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas')
<img src="https://cdn-icons-png.flaticon.com/512/1088/1088537.png?w=360" class="logo" alt="Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
