<div class="index-widget-listdata">
	<h1>球员列表</h1>
	<table border="1">
		<tr>
			<th>姓名</th>
			<th>球队</th>
			<th>号码</th>
			<th>年龄</th>
		</tr>
		{% for obj in list %}
			<tr>
				<td>
					{{ obj.name }}
				</td>
				<td>
					{{ obj.team }}
				</td>
				<td>
					{{ obj.number }}
				</td>
				<td>
					{{ obj.age }}
				</td>
			</tr>
		{% endfor %}
	</table>
</div>