type userInfoType = {
  name: string;
  age: number;
  career?: string;
};

let test2 = "oslim";

// test.toFixed()

function doSomething2(name: string, age: number) {
  console.log();
  console.log("hello");
}

doSomething2("seim", 40);

const user = {
  name: "oslim",
  age: 40,
  career: "blblblblblbl",
};

function testSomething(userInfo: userInfoType) {
  console.log(userInfo.name);
  //   console.log(userInfo.agee);
  console.log(userInfo.career);

  if (userInfo.career) careerLogger(userInfo.career);
}

testSomething(user);



testSomething({name: 'John', age: 1234});


function careerLogger(career: string){
    console.log(career);
}