export function test(){
	return new Promise((resolve,reject)=>{
		setTimeout(()=>{
			resolve("Ура!");
		},5000);
	});
}